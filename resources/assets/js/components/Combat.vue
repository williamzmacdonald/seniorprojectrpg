<template>
	<div class = "container">
		<ul>
			<li v-for="fighter in fighters">
				{{ fighter.name }} - {{ fighter.initiative }} 
				<input type = "text" id = {{ fighter.id }} v-model = updateFighter @blur='changeFighter'>Set Initiative</input>
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
		changeFighter(){
			axios.put(joinlink+'/fighters/'+fighterid, { initiative: this.updateFighter });

		}
	}
};
</script>