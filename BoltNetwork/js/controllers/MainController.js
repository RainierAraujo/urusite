app.controller('MainController', ['$scope', function($scope) {
  $scope.series = "Games of Thrones - Season 1"; 
  $scope.seriesimg ="img/url4.jpg.jpg";
  $scope.program = 
    [{      
     episode: "Winter is Comming", 
     description: "Robert Baratheon, King of the Seven Kingdoms of Westeros, and his wife, Cersei Lannister, travel north to make his old friend Eddard 'Ned' Stark – Warden of the North and Lord of the castle Winterfell – an offer he cannot refuse. Across the narrow sea in Essos, the exiled Prince Viserys Targaryen forges a new alliance to regain the Iron Throne; he will trade his sister Daenerys in marriage to the savage Dothraki warlord Khal Drogo in exchange for Drogo's army. Back in Winterfell, Ned's 10-year-old son Bran is climbing the walls of a building when he accidentally discovers Queen Cersei and her twin brother Jaime Lannister having an incestuous relationship. To keep the relationship secret, Jaime pushes Bran out the high window in an attempt to kill him.",
     datetime: new Date(2011, 04, 17, 21, 00, 00, 00)
     },
     
     {episode: "The Kingsroad", 
     description: " Bran lies unconscious, his fate in doubt, while Catelyn tells her family that she believes his fall was an attempt on his life by the Lannisters. Having accepted his new role as the King's Hand (the King's closest confidant and prime minister), Ned leaves his home in Winterfell with his daughters Sansa and Arya, while Catelyn stays behind to tend to Bran. Jon Snow, Ned's bastard son, heads north to join the brotherhood of the Night's Watch, protectors of the Wall that keeps the vicious White Walkers and the savage wildlings from entering civilized Westeros. Tyrion Lannister, a dwarf and the Queen's brother, decides to forego the trip south with his family, instead joining Jon's entourage heading to the Wall. Viserys bides his time in hopes of winning back the throne, while Daenerys focuses her attention on learning how to please her new husband, Drogo. When Prince Joffrey Baratheon threatens Arya Stark and her friend, one of her family's direwolves defends her, provoking a conflict between the Starks and the Lannisters. Bran awakens from unconsciousness just after Ned kills his daughter's direwolf.",
     datetime: new Date(2011, 04, 24, 21, 00, 00, 00) },
     {
     episode: "Lord Snow", 
     description: " Ned joins the King's Small Council at King's Landing, capital of the Seven Kingdoms, and learns just how poorly Westeros is being managed. Catelyn decides to go covertly to the south to warn her husband, but is intercepted by an old friend, Councillor Petyr 'Littlefinger' Baelish. Bran learns he will never walk again. He does not remember that Jaime Lannister pushed him out of a tower, saying instead that he fell. Jon struggles to adapt to life on the Wall, as he trains with a number of low-born recruits who are not impressed by his bloodline. Tyrion, also visiting the Wall, is beseeched by the Watch Commander Lord Mormont to plead with the King and Queen to send more men to join the Night's Watch, for powerful enemies are massing beyond the Wall. Daenerys learns that she is pregnant, and now possessing no small measure of control as Drogo's 'Khaleesi', begins to stand up to Viserys.",
     datetime: new Date(2011, 05, 01, 21, 00, 00, 00) },
     {
     episode: "Cripples, Bastards, and Broken Things", 
     description: " Tyrion reaches out to Bran with a way for the boy to reclaim his mobility. Ned searches for clues to the unexplained death of Jon Arryn (the former King's Hand), and in the process uncovers King Robert's illegitimate son. Robert and his guests witness a tournament honoring Ned. Jon takes measures to protect Samwell Tarly, an awkward and friendless boy, from the abuse of the Night's Watchmen; a frustrated Viserys clashes with his newly empowered sister; Sansa dreams of life as a queen, while Arya envisions a far different future. Catelyn rallies her father's allies and has Tyrion arrested for conspiring to murder her son.",
     datetime: new Date(2011, 05, 08, 21, 00, 00, 00) },
     {
     episode: "The Wolf and the Lion", 
     description: "Ned refuses to participate in Robert's plan to assassinate the pregnant Daenerys Targaryen, and resigns as Robert's Hand as a result, much to Robert's anger. Catelyn and Tyrion (who she has taken as her prisoner) arrive at her sister Lysa's home in the Eyrie. News of Tyrion's capture reaches King's Landing where Jaime Lannister, the Queen's twin brother, demands answers from Ned. A vengeful Jaime fights Ned until his man stabs Ned in the leg from behind",
     datetime: new Date(2011, 05, 15, 21, 00, 00, 00) }]
  
}]);