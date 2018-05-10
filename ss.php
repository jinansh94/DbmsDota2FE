
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dota2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="CaptureDropdownSelection.js"></script>
  <script src="jquery-3.3.1.min.js"></script>
</head>
<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<!--                <a class="navbar-brand" href="#"><img class="dota-home" src="img/Dota.png"></a>-->
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="#">Home</a> </li>
                    <li><a href="#">Heroes</a></li>
                    <li><a href="#">Matches</a></li>
                    <li><a href="#">Stats</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <div id="myCarousel" class="carousel slide container" style="width: 100%" data-ride="carousel">
        <div class="carousel-caption">
                    <h1>Win your Dota2</h1>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active">
            </li>
            <li data-target="#myCarousel" data-slide-to="1">
            </li>
            <li data-target="#myCarousel" data-slide-to="2">
            </li>
        </ol>
        <div class="carousel-inner" style="height: 200px; width: 100%" role="listbox">
            
            <div class="item active">
                <img src="img/Dota0.png">   
            </div><!-- End Active -->
            <div class="item">
                        <img src="img/Dota1.png">
            </div>
            <div class="item">
                        <img src="img/Dota2.png">
            </div>
        </div>
        <!-- Start Slider Controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
    </div><!--- End Slider -->
  <!-- Example split danger button -->

<div class="container">
  <h2>Parameters</h2>
<!--        <div class="col-lg-2 btn-drop">-->
        <form method ="post" action="formQueryPage.php"> 
        
            
        <script src="CaptureDropdownSelection.js"></script>
        <div class ="col-lg-2 btn-drop">
        
         <select class="form-control" id="select_1" name="select1">
             <option value="Heroes"> Heroes</option>
           <option value="antimage"> antimage</option>
          <option value="axe">  axe</option>
          <option value="bane">  bane</option>
           <option value="bloodseeker"> bloodseeker</option>
           <option value="crystal_maiden"> crystal_maiden</option>
           <option value="drow_ranger"> drow_ranger</option>
           <option value="earthshaker"> earthshaker</option>
           <option value="juggernaut"> juggernaut</option>
           <option value="mirana"> mirana</option>
           <option value="nevermore"> nevermore</option>
           <option value="morphling"> morphling</option>
           <option value="phantom_lancer"> phantom_lancer</option>
           <option value="puck"> puck</option>
           <option value="pudge"> pudge</option>
           <option value="razor"> razor</option>
            <option value="sand_king">sand_king</option>
           <option value="storm_spirit"> storm_spirit</option>
           <option value="sven"> sven</option>
           <option value="tiny"> tiny</option>
           <option value="vengefulspirit"> vengefulspirit</option>
           <option value="windrunner"> windrunner</option>
           <option value="zuus"> zuus</option>
            <option value="kunkka">kunkka</option>
            <option value="lina">lina</option>
            <option value="lich">lich</option>
            <option value="lion">lion</option>
            <option value="shadow_shaman">shadow_shaman</option>
           <option value="slardar"> slardar</option>
            <option value="tidehunter">tidehunter</option>
            <option value="witch_doctor">witch_doctor</option>
           <option value="riki"> riki</option>
            <option value="enigma">enigma</option>
            <option value="tinker">tinker</option>
            <option value="sniper">sniper</option>
            <option value="necrolyte">necrolyte</option>
            <option value="warlock">warlock</option>
            <option value="beastmaster">beastmaster</option>
            <option value="queenofpain">queenofpain</option>
            <option value="venomancer">venomancer</option>
            <option value="faceless_void">faceless_void</option>
            <option value="skeleton_king">skeleton_king</option>
            <option value="death_prophet">death_prophet</option>
            <option value="phantom_assassin">phantom_assassin</option>
            <option value="pugna">pugna</option>
            <option value="templar_assassin">templar_assassin</option>
            <option value="viper">viper</option>
            <option value="luna">luna</option>
            <option value="dragon_knight">dragon_knight</option>
            <option value="dazzle">dazzle</option>
            <option value="rattletrap">rattletrap</option>
            <option value="leshrac">leshrac</option>
            <option value="furion">furion</option>
            <option value="life_stealer">life_stealer</option>
            <option value="dark_seer">dark_seer</option>
            <option value="clinkz">clinkz</option>
            <option value="omniknight">omniknight</option>
            <option value="enchantress">enchantress</option>
            <option value="huskar">huskar</option>
            <option value="night_stalker">night_stalker</option>
            <option value="broodmother">broodmother</option>
            <option value="bounty_hunter">bounty_hunter</option>
            <option value="weaver">weaver</option>
            <option value="jakiro">jakiro</option>
            <option value="batrider">batrider</option>
            <option value="chen">chen</option>
            <option value="spectre">spectre</option>
            <option value="doom_bringer">doom_bringer</option>
            <option value="ancient_apparition">ancient_apparition</option>
            <option value="ursa">ursa</option>
            <option value="spirit_breaker">spirit_breaker</option>
            <option value="gyrocopter">gyrocopter</option>
            <option value="alchemist">alchemist</option>
            <option value="invoker">invoker</option>
            <option value="silencer">silencer</option>
            <option value="obsidian_destroyer">obsidian_destroyer</option>
            <option value="lycan">lycan</option>
            <option value="brewmaster">brewmaster</option>
            <option value="shadow_demon">shadow_demon</option>
            <option value="lone_druid">lone_druid</option>
            <option value="chaos_knight">chaos_knight</option>
            <option value="meepo">meepo</option>
            <option value="treant">treant</option>
            <option value="ogre_magi">ogre_magi</option>
            <option value="undying">undying</option>
            <option value="rubick">rubick</option>
            <option value="disruptor">disruptor</option>
            <option value="nyx_assassin">nyx_assassin</option>
            <option value="naga_siren">naga_siren</option>
            <option value="keeper_of_the_light">keeper_of_the_light</option>
            <option value="wisp">wisp</option>
            <option value="visage">visage</option>
            <option value="slark">slark</option>
            <option value="medusa">medusa</option>
            <option value="troll_warlord">troll_warlord</option>
            <option value="centaur">centaur</option>
            <option value="magnataur">magnataur</option>
            <option value="shredder">shredder</option>
            <option value="bristleback">bristleback</option>
            <option value="tusk">tusk</option>
            <option value="skywrath_mage">skywrath_mage</option>
            <option value="abaddon">abaddon</option>
            <option value="elder_titan">elder_titan</option>
            <option value="legion_commander">legion_commander</option>
            <option value="ember_spirit">ember_spirit</option>
            <option value="earth_spirit">earth_spirit</option>
            <option value="terrorblade">terrorblade</option>
            <option value="phoenix">phoenix</option>
            <option value="oracle">oracle</option>
            <option value="techies">techies</option>
            <option value="winter_wyvern">winter_wyvern</option>
            <option value="arc_warden">arc_warden</option>
            <option value="abyssal_underlord">abyssal_underlord</option>
            <option value="monkey_king">monkey_king</option>
            <option value="pangolier">pangolier</option>
            <option value="dark_willow">dark_willow</option>   
            </select>
        </div> 
            
        <div class ="col-lg-2 btn-drop">
       
       <select class="form-control" id="select_2" name="select2">
    
      
<option value="Items">	Items	</option>
<option value="blink">	blink	</option>
<option value="blades_of_attack">	blades_of_attack	</option>
<option value="broadsword">	broadsword	</option>
<option value="chainmail">	chainmail	</option>
<option value="claymore">	claymore	</option>
<option value="helm_of_iron_will">	helm_of_iron_will	</option>
<option value="javelin">	javelin	</option>
<option value="mithril_hammer">	mithril_hammer	</option>
<option value="platemail">	platemail	</option>
<option value="quarterstaff">	quarterstaff	</option>
<option value="quelling_blade">	quelling_blade	</option>
<option value="faerie_fire">	faerie_fire	</option>
<option value="infused_raindrop">	infused_raindrop	</option>
<option value="wind_lace">	wind_lace	</option>
<option value="ring_of_protection">	ring_of_protection	</option>
<option value="stout_shield">	stout_shield	</option>
<option value="recipe_moon_shard">	recipe_moon_shard	</option>
<option value="moon_shard">	moon_shard	</option>
<option value="gauntlets">	gauntlets	</option>
<option value="slippers">	slippers	</option>
<option value="mantle">	mantle	</option>
<option value="branches">	branches	</option>
<option value="belt_of_strength">	belt_of_strength	</option>
<option value="boots_of_elves">	boots_of_elves	</option>
<option value="robe">	robe	</option>
<option value="circlet">	circlet	</option>
<option value="ogre_axe">	ogre_axe	</option>
<option value="blade_of_alacrity">	blade_of_alacrity	</option>
<option value="staff_of_wizardry">	staff_of_wizardry	</option>
<option value="ultimate_orb">	ultimate_orb	</option>
<option value="gloves">	gloves	</option>
<option value="lifesteal">	lifesteal	</option>
<option value="ring_of_regen">	ring_of_regen	</option>
<option value="sobi_mask">	sobi_mask	</option>
<option value="boots">	boots	</option>
<option value="gem">	gem	</option>
<option value="cloak">	cloak	</option>
<option value="talisman_of_evasion">	talisman_of_evasion	</option>
<option value="cheese">	cheese	</option>
<option value="magic_stick">	magic_stick	</option>
<option value="recipe_magic_wand">	recipe_magic_wand	</option>
<option value="magic_wand">	magic_wand	</option>
<option value="ghost">	ghost	</option>
<option value="clarity">	clarity	</option>
<option value="enchanted_mango">	enchanted_mango	</option>
<option value="flask">	flask	</option>
<option value="dust">	dust	</option>
<option value="bottle">	bottle	</option>
<option value="ward_observer">	ward_observer	</option>
<option value="ward_sentry">	ward_sentry	</option>
<option value="recipe_ward_dispenser">	recipe_ward_dispenser	</option>
<option value="ward_dispenser">	ward_dispenser	</option>
<option value="tango">	tango	</option>
<option value="tango_single">	tango_single	</option>
<option value="courier">	courier	</option>
<option value="tpscroll">	tpscroll	</option>
<option value="recipe_travel_boots">	recipe_travel_boots	</option>
<option value="recipe_travel_boots_2">	recipe_travel_boots_2	</option>
<option value="travel_boots">	travel_boots	</option>
<option value="travel_boots_2">	travel_boots_2	</option>
<option value="recipe_phase_boots">	recipe_phase_boots	</option>
<option value="phase_boots">	phase_boots	</option>
<option value="demon_edge">	demon_edge	</option>
<option value="eagle">	eagle	</option>
<option value="reaver">	reaver	</option>
<option value="relic">	relic	</option>
<option value="hyperstone">	hyperstone	</option>
<option value="ring_of_health">	ring_of_health	</option>
<option value="void_stone">	void_stone	</option>
<option value="mystic_staff">	mystic_staff	</option>
<option value="energy_booster">	energy_booster	</option>
<option value="point_booster">	point_booster	</option>
<option value="vitality_booster">	vitality_booster	</option>
<option value="recipe_power_treads">	recipe_power_treads	</option>
<option value="power_treads">	power_treads	</option>
<option value="recipe_hand_of_midas">	recipe_hand_of_midas	</option>
<option value="hand_of_midas">	hand_of_midas	</option>
<option value="recipe_oblivion_staff">	recipe_oblivion_staff	</option>
<option value="oblivion_staff">	oblivion_staff	</option>
<option value="recipe_pers">	recipe_pers	</option>
<option value="pers">	pers	</option>
<option value="recipe_poor_mans_shield">	recipe_poor_mans_shield	</option>
<option value="poor_mans_shield">	poor_mans_shield	</option>
<option value="recipe_bracer">	recipe_bracer	</option>
<option value="bracer">	bracer	</option>
<option value="recipe_wraith_band">	recipe_wraith_band	</option>
<option value="wraith_band">	wraith_band	</option>
<option value="recipe_null_talisman">	recipe_null_talisman	</option>
<option value="null_talisman">	null_talisman	</option>
<option value="recipe_mekansm">	recipe_mekansm	</option>
<option value="mekansm">	mekansm	</option>
<option value="recipe_vladmir">	recipe_vladmir	</option>
<option value="vladmir">	vladmir	</option>
<option value="recipe_buckler">	recipe_buckler	</option>
<option value="buckler">	buckler	</option>
<option value="recipe_ring_of_basilius">	recipe_ring_of_basilius	</option>
<option value="ring_of_basilius">	ring_of_basilius	</option>
<option value="recipe_pipe">	recipe_pipe	</option>
<option value="pipe">	pipe	</option>
<option value="recipe_urn_of_shadows">	recipe_urn_of_shadows	</option>
<option value="urn_of_shadows">	urn_of_shadows	</option>
<option value="recipe_headdress">	recipe_headdress	</option>
<option value="headdress">	headdress	</option>
<option value="recipe_sheepstick">	recipe_sheepstick	</option>
<option value="sheepstick">	sheepstick	</option>
<option value="recipe_orchid">	recipe_orchid	</option>
<option value="orchid">	orchid	</option>
<option value="recipe_bloodthorn">	recipe_bloodthorn	</option>
<option value="bloodthorn">	bloodthorn	</option>
<option value="recipe_echo_sabre">	recipe_echo_sabre	</option>
<option value="echo_sabre">	echo_sabre	</option>
<option value="recipe_cyclone">	recipe_cyclone	</option>
<option value="cyclone">	cyclone	</option>
<option value="recipe_aether_lens">	recipe_aether_lens	</option>
<option value="aether_lens">	aether_lens	</option>
<option value="recipe_force_staff">	recipe_force_staff	</option>
<option value="force_staff">	force_staff	</option>
<option value="recipe_hurricane_pike">	recipe_hurricane_pike	</option>
<option value="hurricane_pike">	hurricane_pike	</option>
<option value="recipe_dagon">	recipe_dagon	</option>
<option value="recipe_dagon_2">	recipe_dagon_2	</option>
<option value="recipe_dagon_3">	recipe_dagon_3	</option>
<option value="recipe_dagon_4">	recipe_dagon_4	</option>
<option value="recipe_dagon_5">	recipe_dagon_5	</option>
<option value="dagon">	dagon	</option>
<option value="dagon_2">	dagon_2	</option>
<option value="dagon_3">	dagon_3	</option>
<option value="dagon_4">	dagon_4	</option>
<option value="dagon_5">	dagon_5	</option>
<option value="recipe_necronomicon">	recipe_necronomicon	</option>
<option value="recipe_necronomicon_2">	recipe_necronomicon_2	</option>
<option value="recipe_necronomicon_3">	recipe_necronomicon_3	</option>
<option value="necronomicon">	necronomicon	</option>
<option value="necronomicon_2">	necronomicon_2	</option>
<option value="necronomicon_3">	necronomicon_3	</option>
<option value="recipe_ultimate_scepter">	recipe_ultimate_scepter	</option>
<option value="ultimate_scepter">	ultimate_scepter	</option>
<option value="recipe_refresher">	recipe_refresher	</option>
<option value="refresher">	refresher	</option>
<option value="recipe_assault">	recipe_assault	</option>
<option value="assault">	assault	</option>
<option value="recipe_heart">	recipe_heart	</option>
<option value="heart">	heart	</option>
<option value="recipe_black_king_bar">	recipe_black_king_bar	</option>
<option value="black_king_bar">	black_king_bar	</option>
<option value="aegis">	aegis	</option>
<option value="recipe_shivas_guard">	recipe_shivas_guard	</option>
<option value="shivas_guard">	shivas_guard	</option>
<option value="recipe_bloodstone">	recipe_bloodstone	</option>
<option value="bloodstone">	bloodstone	</option>
<option value="recipe_sphere">	recipe_sphere	</option>
<option value="sphere">	sphere	</option>
<option value="recipe_lotus_orb">	recipe_lotus_orb	</option>
<option value="lotus_orb">	lotus_orb	</option>
<option value="recipe_meteor_hammer">	recipe_meteor_hammer	</option>
<option value="meteor_hammer">	meteor_hammer	</option>
<option value="recipe_nullifier">	recipe_nullifier	</option>
<option value="nullifier">	nullifier	</option>
<option value="recipe_aeon_disk">	recipe_aeon_disk	</option>
<option value="aeon_disk">	aeon_disk	</option>
<option value="recipe_kaya">	recipe_kaya	</option>
<option value="kaya">	kaya	</option>
<option value="trident">	trident	</option>
<option value="combo_breaker">	combo_breaker	</option>
<option value="refresher_shard">	refresher_shard	</option>
<option value="recipe_spirit_vessel">	recipe_spirit_vessel	</option>
<option value="spirit_vessel">	spirit_vessel	</option>
<option value="recipe_vanguard">	recipe_vanguard	</option>
<option value="vanguard">	vanguard	</option>
<option value="recipe_crimson_guard">	recipe_crimson_guard	</option>
<option value="crimson_guard">	crimson_guard	</option>
<option value="recipe_blade_mail">	recipe_blade_mail	</option>
<option value="blade_mail">	blade_mail	</option>
<option value="recipe_soul_booster">	recipe_soul_booster	</option>
<option value="soul_booster">	soul_booster	</option>
<option value="recipe_hood_of_defiance">	recipe_hood_of_defiance	</option>
<option value="hood_of_defiance">	hood_of_defiance	</option>
<option value="recipe_rapier">	recipe_rapier	</option>
<option value="rapier">	rapier	</option>
<option value="recipe_monkey_king_bar">	recipe_monkey_king_bar	</option>
<option value="monkey_king_bar">	monkey_king_bar	</option>
<option value="recipe_radiance">	recipe_radiance	</option>
<option value="radiance">	radiance	</option>
<option value="recipe_butterfly">	recipe_butterfly	</option>
<option value="butterfly">	butterfly	</option>
<option value="recipe_greater_crit">	recipe_greater_crit	</option>
<option value="greater_crit">	greater_crit	</option>
<option value="recipe_basher">	recipe_basher	</option>
<option value="basher">	basher	</option>
<option value="recipe_bfury">	recipe_bfury	</option>
<option value="bfury">	bfury	</option>
<option value="recipe_manta">	recipe_manta	</option>
<option value="manta">	manta	</option>
<option value="recipe_lesser_crit">	recipe_lesser_crit	</option>
<option value="lesser_crit">	lesser_crit	</option>
<option value="recipe_dragon_lance">	recipe_dragon_lance	</option>
<option value="dragon_lance">	dragon_lance	</option>
<option value="recipe_armlet">	recipe_armlet	</option>
<option value="armlet">	armlet	</option>
<option value="recipe_invis_sword">	recipe_invis_sword	</option>
<option value="invis_sword">	invis_sword	</option>
<option value="recipe_silver_edge">	recipe_silver_edge	</option>
<option value="silver_edge">	silver_edge	</option>
<option value="recipe_sange_and_yasha">	recipe_sange_and_yasha	</option>
<option value="sange_and_yasha">	sange_and_yasha	</option>
<option value="recipe_satanic">	recipe_satanic	</option>
<option value="satanic">	satanic	</option>
<option value="recipe_mjollnir">	recipe_mjollnir	</option>
<option value="mjollnir">	mjollnir	</option>
<option value="recipe_skadi">	recipe_skadi	</option>
<option value="skadi">	skadi	</option>
<option value="recipe_sange">	recipe_sange	</option>
<option value="sange">	sange	</option>
<option value="recipe_helm_of_the_dominator">	recipe_helm_of_the_dominator	</option>
<option value="helm_of_the_dominator">	helm_of_the_dominator	</option>
<option value="recipe_maelstrom">	recipe_maelstrom	</option>
<option value="maelstrom">	maelstrom	</option>
<option value="recipe_desolator">	recipe_desolator	</option>
<option value="desolator">	desolator	</option>
<option value="recipe_yasha">	recipe_yasha	</option>
<option value="yasha">	yasha	</option>
<option value="recipe_mask_of_madness">	recipe_mask_of_madness	</option>
<option value="mask_of_madness">	mask_of_madness	</option>
<option value="recipe_diffusal_blade">	recipe_diffusal_blade	</option>
<option value="diffusal_blade">	diffusal_blade	</option>
<option value="recipe_ethereal_blade">	recipe_ethereal_blade	</option>
<option value="ethereal_blade">	ethereal_blade	</option>
<option value="recipe_soul_ring">	recipe_soul_ring	</option>
<option value="soul_ring">	soul_ring	</option>
<option value="recipe_arcane_boots">	recipe_arcane_boots	</option>
<option value="arcane_boots">	arcane_boots	</option>
<option value="recipe_octarine_core">	recipe_octarine_core	</option>
<option value="octarine_core">	octarine_core	</option>
<option value="orb_of_venom">	orb_of_venom	</option>
<option value="blight_stone">	blight_stone	</option>
<option value="recipe_ancient_janggo">	recipe_ancient_janggo	</option>
<option value="ancient_janggo">	ancient_janggo	</option>
<option value="recipe_medallion_of_courage">	recipe_medallion_of_courage	</option>
<option value="medallion_of_courage">	medallion_of_courage	</option>
<option value="recipe_solar_crest">	recipe_solar_crest	</option>
<option value="solar_crest">	solar_crest	</option>
<option value="smoke_of_deceit">	smoke_of_deceit	</option>
<option value="tome_of_knowledge">	tome_of_knowledge	</option>
<option value="recipe_veil_of_discord">	recipe_veil_of_discord	</option>
<option value="veil_of_discord">	veil_of_discord	</option>
<option value="recipe_guardian_greaves">	recipe_guardian_greaves	</option>
<option value="guardian_greaves">	guardian_greaves	</option>
<option value="recipe_rod_of_atos">	recipe_rod_of_atos	</option>
<option value="rod_of_atos">	rod_of_atos	</option>
<option value="recipe_iron_talon">	recipe_iron_talon	</option>
<option value="iron_talon">	iron_talon	</option>
<option value="recipe_abyssal_blade">	recipe_abyssal_blade	</option>
<option value="abyssal_blade">	abyssal_blade	</option>
<option value="recipe_heavens_halberd">	recipe_heavens_halberd	</option>
<option value="heavens_halberd">	heavens_halberd	</option>
<option value="recipe_ring_of_aquila">	recipe_ring_of_aquila	</option>
<option value="ring_of_aquila">	ring_of_aquila	</option>
<option value="recipe_tranquil_boots">	recipe_tranquil_boots	</option>
<option value="tranquil_boots">	tranquil_boots	</option>
<option value="shadow_amulet">	shadow_amulet	</option>
<option value="recipe_glimmer_cape">	recipe_glimmer_cape	</option>
<option value="glimmer_cape">	glimmer_cape	</option>
<option value="river_painter">	river_painter	</option>
<option value="river_painter2">	river_painter2	</option>
<option value="river_painter3">	river_painter3	</option>
<option value="river_painter4">	river_painter4	</option>
<option value="river_painter5">	river_painter5	</option>
<option value="river_painter6">	river_painter6	</option>
<option value="river_painter7">	river_painter7	</option>

            </select>  
        </div> 
    
            <div class ="col-lg-2 btn-drop">
        
        <select class="form-control" id="select_3" name="select3">
    <option value="Team">Team</option>
    <option value="Radiant">Radiant</option>
    <option value="Dire">Dire</option>
    
            </select>   
        </div> 
            
            <div class ="col-lg-2 btn-drop">
       
        <select class="form-control" id="select_4" name="select4">
    <option value="Match Won">Match Won</option>
    <option value="Won">Won</option>
    <option value="Lost">Lost</option>
            </select>   
        </div> 
            
          <div class ="col-lg-2 btn-drop">   
        <select class="form-control" id="select_5" name="select5">
    <option value="Match Won">Match Won</option>
    <option value="Won">Won</option>
    <option value="Lost">Lost</option>
            </select>   
        </div> 
  
<!--
            <script>
            $('#menuList1 li').click(function(){
             $('#selected1').text($(this).text());
        });
            $('#menuList2 li').click(function(){
             $('#selected2').text($(this).text());
        });
            $('#menuList3 a').click(function(){
             $('#selected3').text($(this).text());
        });
            $('#menuList4 a').click(function(){
             $('#selected4').text($(this).text());
        });
                $('#menuList5 a').click(function(){
             $('#selected5').text($(this).text());
        });
        </script>
-->
            
            
            <button type="submit" class ="btn"> 
                Submit </button>
        </form>
    
    </div>
<!--
        <div class="dropdown dropdown-inline row">
        
        <script src="CaptureDropdownSelection.js"></script>
        <div class ="col-lg-2 btn-drop">
        <button class="btn btn-default dropdown-toggle"  type="button" id="menu1" data-toggle="dropdown">
        XPM
        <span id="selected1">Chose option</span><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu"  aria-labelledby="menu1" id="menuList1">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">W3Schools</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
            </ul>
        </div> 
       
            
        <div class ="col-lg-2">
        <button class="btn btn-default dropdown-toggle "  type="button" id="menu2" data-toggle="dropdown">
        Winrate
        <span id="selected2">Chose option</span><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu"  aria-labelledby="menu2" id="menuList2">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">W3Schools</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
            </ul>
        </div> 
            
        <div class ="col-lg-2">
        <button class="btn btn-default dropdown-toggle"  type="button" id="menu3" data-toggle="dropdown">
        GPM
        <span id="selected3">Chose option</span><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu"  aria-labelledby="menu3" id="menuList3">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">W3Schools</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
            </ul>
        </div> 
            
        <div class ="col-lg-2">
        <button class="btn btn-default dropdown-toggle"  type="button" id="menu4" data-toggle="dropdown">
        Kills
        <span id="selected4">Chose option</span><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu" aria-labelledby="menu4" id="menuList4">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">W2Schools</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
        </ul>
        </div>    
        
        <script>
            $('#menuList4 li').click(function(){
             $('#selected4').text($(this).text());
        });
            $('#menuList3 li').click(function(){
             $('#selected3').text($(this).text());
        });
            $('#menuList2 a').click(function(){
             $('#selected2').text($(this).text());
        });
            $('#menuList1 a').click(function(){
             $('#selected1').text($(this).text());
        });
        </script>    
        </div>
-->
          
    <br>
    
<!--
        <div class="dropdown dropdown-inline row">
              
        <div class ="col-lg-2">
        <button class="btn btn-default dropdown-toggle "  type="button" id="menu5" data-toggle="dropdown">
        Deaths
        <span id="selected5">Chose option</span><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu"  aria-labelledby="menu5" id="menuList5">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">W3Schools</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
            </ul>
        </div> 
            
        <div class ="col-lg-2">
        <button class="btn btn-default dropdown-toggle"  type="button" id="menu6" data-toggle="dropdown">
        Assists
        <span id="selected6">Chose option</span><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu"  aria-labelledby="menu6" id="menuList6" >
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">W3Schools</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
            </ul>
        </div> 
            
        <div class ="col-lg-2">
        <button class="btn btn-default dropdown-toggle"  type="button" id="menu7" data-toggle="dropdown">
        Damage
        <span id="selected7">Chose option</span><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu"  aria-labelledby="menu7" id="menuList7">
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">W3Schools</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
            </ul>
        </div> 
            
        <div class ="col-lg-2 ">    
        <button class="btn btn-default dropdown-toggle"  type="button" id="menu8" data-toggle="dropdown">  
        Whatever
        <span id="selected8">Chose option</span><span class="caret"></span></button>
        <ul class="dropdown-menu" role="menu"  aria-labelledby="menu8" id="menuList8">
        <li role="presentation" value="d1" selected><a role="menuitem" tabindex="-1" href="#">W3Schools</a></li>
        <li role="presentation" value="d2"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
        <li role="presentation " value="d3"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
        <li role="presentation" value="d4"><a role="menuitem" tabindex="-1" href="#">About Us</a></li>
            </ul>      
        </div>  
        
        <script>
            $('#menuList8 li').click(function(){
             $('#selected8').text($(this).text());
        });
            $('#menuList7 li').click(function(){
             $('#selected7').text($(this).text());
        });
            $('#menuList6 li').click(function(){
             $('#selected6').text($(this).text());
        });
            $('#menuList5 li').click(function(){
             $('#selected5').text($(this).text());
        });
        </script>
        </div>
-->
   
<!--</div>-->
</body>
</html>
