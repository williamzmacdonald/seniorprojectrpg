<template>
	<div class = "container">
		<ul>
			<li v-for="(fighter, index) in fighters">
				{{ fighter.name }} - {{ fighter.initiative }} 
				<input type = "text" :id = "fighter.id" v-model = updateFighter @blur='changeFighter(index)'>Set Initiative</input>
			</li>
		</ul>
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
			updateFighter: '',
			fighterid: 0
		};
	},


	mounted(){
		axios.get(joinlink+'/reload').then(response => (this.fighters = response.data));
	},

	methods: {
		changeFighter(index){
			axios.put(joinlink+'/fighters/'+this.fighters[index].id, { initiative: this.updateFighter })
				.then(response => (Vue.set(this.fighters, index, response.data)));
		}
	}
};
</script>