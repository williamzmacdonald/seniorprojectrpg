<template>
	<div class = "container" id="app">
		<!--<ul>
			<li v-for="(fighter, index) in fighters">
				
				{{ fighter.name }} - {{ fighter.initiative }} - {{ fighter.health }} hp
			</li>		
		</ul>-->

		<div class="row relative" style="margin: 0 auto; width: 60%; padding-bottom: 30px;">
            <div id="combat_list" style="width: 700px; margin-right: 40px;">
                <div>
                    <h3 class="assassin uppercase relative" style="text-align: center; background: none; border-bottom: none;">Combat List</h3>
                    <a role="button" class="btn btn-default absolute" id="edit_combat" style="top: 10px;; right: 0; font-size: 12px;"><span>Edit</span></a>
					<a role="button" class="btn btn-success absolute" id="add_combat" data-toggle="modal" data-target="#myModal" style="top: 10px; right: 50px; font-size: 12px;">Add</a>
                    <div>
                        <!-- List group -->
                        <ul id="combat" class="list-group">
                            <li v-for= "(fighter, index) in fighters" class="list-group-item fighter" style="border-bottom: 1px solid black;">
								<button class="btn btn-default update_combat" @click= "changeFighter(index)" style="display: none;">Update</button>
                                <span class="glyphicon glyphicon-user avatar_combat" aria-hidden="true" style="left: 25px;"></span>
                                <h5 class="player_combat" style="left: 50px;">{{ fighter.name }}</h5>
                                <h6 class="health">{{ fighter.health }}</h6>
                                <h6 class="initiative">{{ fighter.initiative }}</h6>
                                <a role="button" class="btn btn-primary delete_combat"  @click= "deleteFighter(index)" style="display: none;">Delete</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
			<!-- Button trigger modal -->
			

			<!-- Modal -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  				<div class="modal-dialog" role="document">
    				<div class="modal-content">
      					<div class="modal-header">
        					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        					<h4 class="modal-title" id="myModalLabel">Fighters</h4>
      					</div>
      					<div class="modal-body" style="margin-top: 25px; margin-bottom: 25px;">
							<form class="form-horizontal">
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
      					</div>
      					<div class="modal-footer clearfix">
       		 				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        					<button type="button" class="btn btn-primary" @click= "addFighter()" data-dismiss="modal">Add Fighter</button>
     					</div>
    				</div>
  				</div>
			</div>
        </div>
		
		<input type = "text" v-model = updateInitiative placeholder="initiative"></input>
		<input type = "text" v-model = updateHealth placeholder="health"></input>
		<input type = "text" v-model = updateAvatar placeholder="avatarurl"></input>
		<input type = "text" v-model = updateName placeholder="name"></input>								
		<!--<button class="btn btn-default" @click= "addFighter()">Add</button>-->



	</div>
</template>

<script>
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
	},

	methods: {
		changeFighter(index){
			axios.put(joinlink+'/fighters/'+this.fighters[index].id, 
				{ 	initiative: this.updateInitiative,
					health: this.updateHealth,
					avatarurl: this.updateAvatar,
					name: this.updateName
				}).then(response => (Vue.set(this.fighters, index, response.data)));
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
				}).then(response => (this.fighters.push(response.data)));
			this.updateInitiative= '';
			this.updateHealth= '';
			this.updateAvatar='';
			this.updateName= '';
		},
		deleteFighter(index){
			axios.delete(joinlink+'/fighters/'+this.fighters[index].id)
			.then(response => (this.fighters.splice(index, 1)));
		}
	}
};
</script>