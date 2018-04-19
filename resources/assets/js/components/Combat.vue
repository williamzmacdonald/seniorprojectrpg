<template>
	<div class = "container">
		<ul>
			<li v-for="fighter in fighters" v-text="fighter"></li>
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
			fighters: []
		};
	},


	mounted(){
		axios.get(joinlink+'/update').then(response => (this.fighters = response.data));
	}
};
</script>