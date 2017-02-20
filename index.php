<?php
    $planet = "";
    $name = "";
    $gender = "";
    $presentation = "";
    $backpack = array("coat");
    $love = "";
    $skin = "";
    $hair = "";
    $weapon = "";
    $health = 100;
    $money = 0;
    $happiness = 20;
    $planet = "";
    $currentpath = 0;
?>

    
        <style type="text/css">
        .two{
            display:none;
        }
        .three{
            display:none;
        }
        .four{
            display:none;
        }
        .character{
            display:none;
        }
    </style>
    
<?php
    
    if(isset($_POST['window'])){
        ?>
        <style type="text/css">.two{
            display:block;
        }</style>
        <?php
    }
    if(isset($_POST['door'])){
        ?>
        <style type="text/css">.three{
            display:block;
        }</style>
        <?php
    }
    if(isset($_POST['hide'])){
        ?>
        <style type="text/css">.four{
            display:block;
        }</style>
        <?php
    }
    if(isset($_POST['continue-w'])){
        $currentpath = 1
        ?>
        <style type="text/css">.character{
            display:block;
        }</style>
        <?php
    }
    if(isset($_POST['continue-d'])){
        $currentpath = 2
        ?>
        <style type="text/css">.character{
            display:block;
        }</style>
        <?php
    }
    if(isset($_POST['continue-h'])){
        $currentpath = 3;
        $backpack[] = "datacard"; 
        ?>
        <style type="text/css">.character{
            display:block;
        }</style>
        <?php
    }
?>

<html>
<head>
    <title>City</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css">
    <link rel="stylesheet" href="/styles/main.css">

</head>
<body>
    <div class="one">
        <p>You wake on a small, lumpy mattress, with your head throbbing and your mouth dry. The room is tiny, barely bigger than your bed. The walls are made of a metallic substance with a bluish tinge and the sun casts an alien pink light through the small, high window. You pull the rough blanket over your head and try to pretend this isn't happening, when a sudden noise shakes the walls. The whole building rocks, as if from an explosion. Sirens blare, one after another, overlapping until the noise is unbearable. You...</p>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <p><button name="window">...look out of the window.</button></p>
        <p><button name="door">...throw on your coat and shoes and run out of the door.</button></p>
        <p><button name="hide">...hide under the bed.</button></p>
        </form>
    </div>
    <div class="two initial-hide">
        <p>Through the window, the sky is exploding; the flashes of light hurt your eyes but you keep watching regardless. The sight is terrifying, but beautiful, rocks that have hurtled towards this world exploding as they're pulled into the atmosphere. Despite your grogginess, you laugh. What a beautiful place for your first taste of adulthood.</p>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <p><button name="continue-w">Continue</button></p>
        </form>
    </div>
    <div class="three initial-hide">
        <p>The corridor is narrow and dirty, poorly lit though you can't even see the light source. There's no-one else around and the air is shaking with a series of smaller explosions. You tell yourself there has to be an explanation, that if you just find someone who can tell you what's going on then it will all be alright.</p>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <p><button name="continue-d">Continue</button></p>
        </form>
    </div>
    <div class="four initial-hide-b">
        <p>The bed isn't particularly conducive to hiding under, but you make yourself as small as possible and squeeze yourself under the wire frame, listening as small explosions shudder the building. You know the planet is picked at random, but surely they wouldn't send you somewhere dangerous. Would they?
        </p>
        <p>
            You feel something small and hard on the floor beneath you. You pick it up. It's a datacard, perhaps left here by the last person to stay in this tiny room.
        </p>
        <form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
        <p><button name="continue">Continue</button></p>
        </form>
    </div>
    <div class="character">
        <p>Your earlier disorientation fades as you begin to remember who you are, and why you're here.</p>
        <form>
            <label for="name">Your name is:</label>
            <input class="u-full-width" type="text" placeholder="your name" id="characterName">
            <label for="exampleRecipientInput">You usually present as:</label>
            <select class="u-full-width" id="presentation">
            <option value="Option 1">feminine</option>
            <option value="Option 2">masculine</option>
            <option value="Option 3">a mixture of both - it depends on my mood</option>
            <option value="Option 4">neither masculine nor feminine</option>
            </select>
            <label for="exampleRecipientInput">Your are:</label>
            <select class="u-full-width" id="gender">
            <option value="Option 1">a man</option>
            <option value="Option 2">a woman</option>
            <option value="Option 3">sometimes a woman, sometimes a man, sometimes both</option>
            <option value="Option 4">neither a man nor a woman</option>
            </select>
            <label for="exampleRecipientInput">Your most prized possession is:</label>
            <select class="u-full-width" id="possession">
            <option value="Option 1">a locket containing a picture of your deceased sister</option>
            <option value="Option 2">your music collection</option>
            <option value="Option 3">your artifical arm</option>
            <option value="Option 4">a book of spells</option>
            </select>
            <label for="exampleRecipientInput">In your backpack you also carry:</label>
            <select class="u-full-width" id="backpack">
            <option value="Option 1">spare clothes, a map of your hometown, 800 credits</option>
            <option value="Option 2">heavy boots, 3 months worth of concentrated protein, 250 credits</option>
            <option value="Option 3">a silk scarf, a pocket knife, a red gemstone, 400 credits</option>
            <option value="Option 4">an unidentified electronic device, a filtration mask, 80 credits</option>
            </select>
            <label for="exampleRecipientInput">You are most likely to fall in love with:</label>
            <select class="u-full-width" id="love">
            <option value="Option 1">a man</option>
            <option value="Option 2">a woman</option>
            <option value="Option 3">it could be someone of any gender</option>
            <option value="Option 4">no-one - I love my friends but falling in love isn't a thing that I do</option>
            </select>
            <label for="exampleRecipientInput">Your skin is best described as:</label>
            <select class="u-full-width" id="skin">
            <option value="Option 1">dark</option>
            <option value="Option 2">brown</option>
            <option value="Option 3">pale</option>
            <option value="Option 4">green and slightly scaley</option>
            </select>
            <label for="exampleRecipientInput">Your hair is:</label>
            <select class="u-full-width" id="hair">
            <option value="Option 1">non-existent</option>
            <option value="Option 2">blond and almost to your waist</option>
            <option value="Option 3">dark and cropped close to your scalp</option>
            <option value="Option 4">grey and uncontrollable</option>
            <option value="Option 5">liable to change colour without warning</option>
            </select>
            <label for="exampleRecipientInput">Your preferred weapon is:</label>
            <select class="u-full-width" id="weapon">
            <option value="Option 1">a dagger with a hilt encrusted with jewels of every colour</option>
            <option value="Option 2">a magic rope</option>
            <option value="Option 3">your grandmother's longsword</option>
            <option value="Option 4">your quick with and power of persuasion</option>
            </select>
        </form>
    </div>
    
</body>
