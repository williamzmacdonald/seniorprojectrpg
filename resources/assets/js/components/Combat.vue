<template>
	<div class = "container" style="max-width: 500px;
    margin: auto;">
		<ul>
			<li v-for="(fighter, index) in fighters">
				<button @click= "changeFighter(index)">Update</button>
				{{ fighter.name }} - {{ fighter.initiative }} - {{ fighter.health }} hp
			</li>		
		</ul>
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