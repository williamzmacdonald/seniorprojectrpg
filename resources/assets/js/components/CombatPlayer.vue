<template>
	<div class = "container" id="app">
		<div class="row relative" style="margin: 0 auto; width: 65%; padding-bottom: 30px;">
            <div id="combat_list" style="width: 700px; margin-right: 40px;">
                <div>
                    <h3 class="assassin uppercase relative" style="text-align: center; background: none; border-bottom: none;">Combat List</h3>
                    <div>
                        <!-- List group -->
                        <ul id="combat" class="list-group">
                            <li v-for= "(fighter, index) in fighters" class="list-group-item fighter" style="border-bottom: 1px solid black;">
                                <span class="glyphicon glyphicon-user avatar_combat" aria-hidden="true" style="left: 25px;"></span>
                                <h5 class="player_combat" style="left: 50px;">{{ fighter.name }}</h5>
                                <h6 class="health">{{ fighter.health }}</h6>
                                <h6 class="initiative">{{ fighter.initiative }}</h6>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
};
</script>