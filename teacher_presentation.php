


<!DOCTYPE HTML>
<html lang="en-us">
<head>
<meta charset="utf-8">
<title>Associative Arrays</title>
<script type="text/JavaScript">
</script>
<link href="stylesheet/stylesheet.css" type="text/css" rel="stylesheet" media="screen">
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Playfair+Display:400,700italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <h1>Associative Arrays</h1>
        <h2>Arrays</h2>
            <p>An array stores multiple values in one variable.  For example, I love cats 
                and might make a list of several of my favourite breeds.</p>

            <pre><code='php'>
                $cats = array("Siamese", "Ragdoll", "Bengal", "Sphynx", "Maine Coon"); 
                echo "I like " .$cats[0]. ", " .$cats[1]. "," .$cats[2]. ", " .$cats[3]. ", and " .$cats[4]. " cats. ";
            </code></pre>
            <?php
             $cats = array("Siamese", "Ragdoll", "Bengal", "Sphynx", "Maine Coon"); 
              echo "I like " .$cats[0]. ", " .$cats[1]. "," .$cats[2]. ", " .$cats[3]. ", and " .$cats[4]. " cats. ";  
            ?>
        <h2>Associative Arrays</h2>
            <p>Associative arrays have an added feature: a key. <img id="key" src="images/key2.png" alt="golden key"></p>
            <p>There are two ways to create an associate array:</p>
                <pre><code='php'>
                    $fur = array("Siamese"=>"short", "Ragdoll"=>"long", "Bengal"=>"short", "Sphynx"=>"none", "Maine Coon"=>"long");
                </code></pre>
            <p>or:</p>
                <pre><code='php'>
                    $fur["Siamese"] = "short";
                    $fur["Ragdoll"] = "long";
                    $fur["Bengal"] = "short";
                    $fur["Sphynx"] = "none";
                    $fur["Maine Coon"] = "long"; 
                </code></pre>
            <p>The named key can then be used in a script:</p>
                <pre><code='php'>
                    $fur = array("Siamese"=>"short", "Ragdoll"=>"long", "Bengal"=>"short", "Sphynx"=>"none", "Maine Coon"=>"long");
                    echo "A Ragdoll cat has " . $fur['Ragdoll'] . " fur where a Sphynx has " .$fur['Sphynx'] . "!";
                </code></pre>
            <p>would result in:</p>
                <?php
                    $fur = array("Siamese"=>"short", "Ragdoll"=>"long", "Bengal"=>"short", "Sphynx"=>"none", "Maine Coon"=>"long",);
                    echo "A Ragdoll cat has " . $fur['Ragdoll'] . " fur where a Sphynx has " .$fur['Sphynx'] . "!";
                ?>
            <p> One important thing to note:  <b>floating point numbers such as 1.5 and 1.6 are not a good choice as a 
                key unless they are passed as a string with quotes because PHP converts them to integers before they are used.</b>  
                In fact, in my example of 1.5 and 1.6 PHP will not only round both keys to 1 but it will <b>overwrite the first repeat 
                key with the second.</b>
                
            <h2>Iterating through arrays</h2>
            
            <p>Associative arrays can be looped through using a foreach loop.  For example, I might want to list
            all the breeds that I have on my array and their fur length.</p>
            <pre><code="php">
                 foreach ($fur as $key => $val){
                     print "$key = $val ";
                 } 
            </code></pre>
            
            <p>would result in:</p>
                <?php
                    foreach ($fur as $key=> $val){
                     print "$key = $val, ";
                 }
                 ?>
            
            <p>Perhaps you would like to know which breeds have long fur.  For that you would need to add an if statement and a condition</p>
                <pre><code>
                 foreach($fur as $key=> $val){
                    if($val === "long"){
                    print "$key, ";
                    }  
                }
                </code></pre>
            <p>The result would be:</p>

                <?php
                foreach($fur as $key=> $val){
                    if($val === "long"){
                    print "$key, ";
                    }
                   
                }
              
                 ?>
            <h2>Adding to Associative Arrays</h2>
            <p> Sometimes, you may want to put another entry in your array.  I was able to find this little code 
                that did the trick.  This will put the item to the end of your array.</p>
            <pre><code>
                $fur["Himalayan"]="long"; 
                    foreach ($fur as $key=> $val){
                     print "$key = $val, ";
                 }
            </code></pre>
                <?php
                $fur["Himalayan"]="long"; 
                    foreach ($fur as $key=> $val){
                     print "$key = $val, ";
                 }
                 ?> 
            <h2>Removing Items from Associative Arrays</h2>
            <p>If you can add an item, you should be able to take one off if needed. For that you use the unset function.</p>
            <pre><code> 
                 unset($fur["Himalayan"]); 
                    foreach ($fur as $key=> $val){
                     print "$key = $val, ";
                 }
            </code></pre>       
                <?php
                unset($fur["Himalayan"]); 
                    foreach ($fur as $key=> $val){
                     print "$key = $val, ";
                 }
                 ?> 
          
              

        <h2>Check out the sources I used for even more information!</h2>
            <ul>
                <li><a href="http://www.w3schools.com/php/php_arrays.asp">W3Schools.com</a></li>
                <li><a href="http://php.net/manual/en/language.types.array.php">PHP.net</a></li>
                <li><a href="http://www.hackingwithphp.com/5/2/0/associative-arrays">Hacking With PHP</a></li>
                <li><a href ="https://jaswanttak.wordpress.com/2010/04/23/php-associative-array-push/">Jaswant Tak's Wordpress</a></li>
                <li><a href="http://stackoverflow.com/questions/3053517/php-remove-element-from-associative-array">StackOverflow</a></li>
            </ul>
</body>
</html>