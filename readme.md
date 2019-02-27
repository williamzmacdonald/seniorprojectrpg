Here's my senior project!
Link to album with walkthrough of the website: https://imgur.com/a/iyQ7vUg

A few notable files to look at some of my work:
in resources/assets/js/components combat.vue contain scripts at the bottom to update the combat list and modal for the combat updater  
combatplayer.vue contains scripts at the bottom to update the combat list for the player
routes/web.php contains all routes as well as the methods associated with each and calls their respective Controllers
app/Http/Controllers (i recommend looking at roomncontroller, notescontroller, and fightercontroller)
Contain each of the controllers for the models, allowing us to override various models' methods dependent on the needs of said model
database/migrations contain each database migration
app/fighter.php app/gameroom.php app/note.php app/user.php contain each of the primary models and relations between each
