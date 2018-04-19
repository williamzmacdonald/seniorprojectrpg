<template>
	<div class = "container">
		<ul>
			<li v-for="fighter in fighters" v-text="fighter"></li>
		</ul>
	</div>
</template>

<script>
export default {
	data(){
		return{
			fighters: []
		};
	},

	created(){
		axios.get('/rooms/{room}/update').then(response => (this.fighters = response.data));
	}
};
</script>