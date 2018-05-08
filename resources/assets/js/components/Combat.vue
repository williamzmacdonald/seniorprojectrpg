<template>
	<div class = "container" id="app">
		<div class="row relative" style="margin: 0 auto; width: 60%; padding-bottom: 30px;">
            <div id="combat_list" style="width: 700px; margin-right: 40px;">
                <div>
                    <h3 class="assassin uppercase relative" style="text-align: center; background: none; border-bottom: none;">Combat List</h3>
                    <a role="button" class="btn btn-default absolute" id="edit_combat" data-toggle="modal" data-target="#myModal" style="top: 10px;; right: 0; font-size: 12px;"><span>Edit</span></a>
					<!--<a role="button" class="btn btn-success absolute" id="add_combat" data-toggle="modal" data-target="#myModal" style="top: 10px; right: 50px; font-size: 12px;">Add</a>-->
                    <div>
                        <!-- List group -->
                        <ul id="combat" class="list-group">
                            <li v-for= "(fighter, index) in fighters" class="list-group-item fighter" style="border-bottom: 1px solid black;">
                                <!--<span class="glyphicon glyphicon-user avatar_combat" aria-hidden="true" style="left: 25px;"></span>-->
								<div class="avatar-combat">
									<img :src = "fighter.avatarurl">
								</div>
                                <h5 class="player_combat" style="left: 50px;" v-model = updateName>{{ fighter.name }}</h5>
                                <h6 class="health" v-model = updateHealth >H: {{ fighter.health }}</h6>
                                <h6 class="initiative" v-model = updateInitiative>I: {{ fighter.initiative }}</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel">Fighters</h4>
      					</div>
      					<div class="modal-body relative" style="margin-top: 25px; margin-bottom: 25px;">
							<div class="text-center" stye="margin-bottom: 20px;">
								<h6>Fill out form below to add or update a fighter</h6>
							</div>
							<form class="form-horizontal" style="margin-top: 20px;">
								<div class="form-group">
									<label for="name" class="col-md-4 control-label">
										<h5 style="margin-top: 5px;">Name</h5>
									</label>
									<div class="col-md-6">
										<input class="form-control" type="text" v-model = updateName>
									</div>
								</div>
								<div class="form-group">
									<label for="health" class="col-md-4 control-label">
										<h5 style="margin-top: 5px;">Health</h5>
									</label>
									<div class="col-md-6">
										<input class="form-control" type="text" v-model = updateHealth>
									</div>
								</div>
								<div class="form-group">
									<label for="initiaitve" class="col-md-4 control-label">
										<h5 style="margin-top: 5px;">Initiative</h5>
									</label>
									<div class="col-md-6">
										<input class="form-control" type="text" v-model = updateInitiative>
									</div>
								</div>
								<div class="form-group">
									<label for="avatarurl" class="col-md-4 control-label">
										<h5 style="margin-top: 5px;">Avatar URL</h5>
									</label>
									<div class="col-md-6">
										<input class="form-control" type="text" v-model = updateAvatar>
									</div>
								</div>
							</form>

							<div class="text-center" style="margin-top: 20px; margin-bottom: 20px; border-bottom: 1px solid silver;"></div>

							<div class="relative" style="height: 20px; margin-bottom: 50px;">
								<button type="button" class="btn btn-primary absolute" style="right: 235px; top: 10px;" @click= "addFighter()" data-dismiss="modal">Add Fighter</button>
							</div>

							<div class="text-center relative" style="margin-top: 20px; margin-bottom: 20px;">
								<div class="absolute" style="left: 30px; top: 5px; border-bottom: 1px solid silver; width: 200px;"></div>
								<h6>OR</h6>
								<div class="absolute" style="right: 30px; top: 5px; border-bottom: 1px solid silver; width: 200px;"></div>
							</div>

							<li v-for= "(fighter, index) in fighters" class="list-group-item fighter">
								<button class="btn btn-default update_combat" @click= "changeFighter(index)" style="display: block;">Update</button>
								<!--<span class="glyphicon glyphicon-user avatar_combat" aria-hidden="true" style="left: 100px;"></span>-->
								<div class="avatar-combat absolute" style="left: 90px; top: 12px;">
									<img :src = "fighter.avatarurl">
								</div>
								<h5 class="player_combat" style="left: 120px;" v-model = updateName>{{ fighter.name }}</h5>
								<h6 class="health" v-model = updateHealth style="right: 150px;">H: {{ fighter.health }}</h6>
								<h6 class="initiative" v-model = updateInitiative style="right: 75px;">I: {{ fighter.initiative }}</h6>
								<a role="button" class="btn btn-primary delete_combat"  @click= "deleteFighter(index)" style="display: block;">Delete</a>
							</li>
      					</div>
      					<div class="modal-footer clearfix">
       		 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     					</div>
    				</div>
  				</div>
			</div>
        </div>
	</div>
</template>

<script>
function sortArray(fighters){
	return fighters.sort((a, b) => a.initiative < b.initiative);
}
export default {
	props: {
		joinlink: {
			default: ''
		},
		gameroomid: {
			default: -1
		}
	},

	data(){
		return{
			fighters: [],
			updateInitiative: '',
			updateHealth: '',
			updateAvatar: '',
			updateName: '',
			fighterid: 0
		};
	},


	mounted(){
		axios.get(joinlink+'/reload').then(response => (this.fighters = response.data));
		window.Echo.channel('combats').listen('combatUpdated', e=>{
			if(e.action == "store"){
				this.fighters.push(e.fighter);
				this.fighters = sortArray(this.fighters);
			}
			else if(e.action == "update"){
				Vue.set(this.fighters, e.index, e.fighter);
				this.fighters = sortArray(this.fighters);
			}
			else if(e.action == "delete"){
				this.fighters.splice(e.index, 1);
				this.fighters = sortArray(this.fighters);
			}
			//axios.get(joinlink+'/reload').then(response => (this.fighters = response.data));
		});
	},

	methods: {
		changeFighter(index){
			axios.put(joinlink+'/fighters/'+this.fighters[index].id, 
				{ 	initiative: this.updateInitiative,
					health: this.updateHealth,
					avatarurl: this.updateAvatar,
					name: this.updateName,
					i: index
				}).then((response)=>{
					Vue.set(this.fighters, index, response.data);
					this.fighters = sortArray(this.fighters);
				});
			this.updateInitiative= '';
			this.updateHealth= '';
			this.updateAvatar='';
			this.updateName= '';
		},
		addFighter(){
			axios.post(joinlink+'/fighters', 
				{ 	initiative: this.updateInitiative,
					health: this.updateHealth,
					avatarurl: this.updateAvatar,
					name: this.updateName,
					gameroom_id: this.gameroomid
				}).then((response)=>{
					this.fighters.push(response.data);
					this.fighters = sortArray(this.fighters);
				});
			this.updateInitiative= '';
			this.updateHealth= '';
			this.updateAvatar='';
			this.updateName= '';
			
		},
		deleteFighter(index){
			console.log(index);
			axios.delete(joinlink+'/fighters/'+this.fighters[index].id,
			{
				params: { i: index }
			}).then((response)=>{
				this.fighters.splice(index, 1);
				this.fighters = sortArray(this.fighters);
			});
		}
	}
};
</script>