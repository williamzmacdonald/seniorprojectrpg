<template>
	<div class = "container" id="app">
		<ul>
			<li v-for="(fighter, index) in fighters">
				<button @click= "changeFighter(index)">Update</button>
				{{ fighter.name }} - {{ fighter.initiative }} - {{ fighter.health }} hp
			</li>		
		</ul>

		<div class="row relative" style="margin: 0 auto; width: 60%; padding-bottom: 30px;">
            <div id="combat_list" style="width: 700px; margin-right: 40px;">
                <div>
                    <h3 class="assassin uppercase relative" style="text-align: center; background: none; border-bottom: none;">Combat List</h3>
                    <a role="button" class="btn btn-default absolute" id="edit_combat" style="top: 10px;; right: 0; font-size: 12px;"><span>Edit</span></a>
                    <div>
                        <!-- List group -->
                        <ul id="combat" class="list-group">
                            <li class="list-group-item fighter">
                                <span class="glyphicon glyphicon-user avatar_combat"aria-hidden="true"></span>
                                <h5 class="player_combat">Name of Player</h5>
                                <h6 class="health">Health</h6>
                                <h6 class="initiative">Initiative</h6>
                                <a href="#" role="button" class="btn btn-primary delete_combat" style="display: none;">Delete</a>
                            </li>
                            <li v-for="(fighter, index) in fighters" class="list-group-item fighter" style="border-bottom: 1px solid black;">
                                <span class="glyphicon glyphicon-user avatar_combat"aria-hidden="true"></span>
                                <h5 class="player_combat">{{ fighter.name }}</h5>
                                <h6 class="health">{{ fighter.health }}</h6>
                                <h6 class="initiative">{{ fighter.initiative }}</h6>
                                <a href="#" role="button" class="btn btn-primary delete_combat" style="display: none;">Delete</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <a role="button" class="btn btn-success absolute" id="add_combat" style="bottom: 0; right: 0; display: none;"><span>Add</span></a>
        </div>
		
		<input type = "text" v-model = updateInitiative placeholder="initiative"></input>
		<input type = "text" v-model = updateHealth placeholder="health"></input>
		<input type = "text" v-model = updateAvatar placeholder="avatarurl"></input>
		<input type = "text" v-model = updateName placeholder="name"></input>

	</div>
</template>

<script>
export default {
	props: {
		joinlink: {
			default: ''
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
		}
	}
};
</script>