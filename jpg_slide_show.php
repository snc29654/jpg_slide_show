<?php
$gazoudir = opendir("./jpg");
while (false !== ($file[] = readdir($gazoudir)));
closedir($gazoudir);
sort($file);
reset($file);


print "<!DOCTYPE html>";
print "<html lang=\"ja\">";
print "<head>";

print "<script language=\"JavaScript\">";
    print "i = 0;";
    print "url = \"./jpg/\";";                
                            
    print "img = new Array("; 
    while (false !== ($gazou = each($file))){
        if ((preg_match ("|.jpg$|", $gazou[1]))||(preg_match ("|.JPG$|", $gazou[1]))) {
            print "\"$gazou[1]\",";
        }
    }

print ");";


    print "function change(){";                
        print "i++;";
        print "if(i >= img.length) {";
            print "i = 0;";
        print "}";
        print "document.body.background = url + img[i];";
    print "}";
    print "function tm(){";                    
        print "document.body.background = url + img[i];";
        print "tm = setInterval(\"change()\",1000);";
    print "}";
    print "</script>";

print "</head>";
print "<body onLoad=\"tm()\">";

print "</body>";
print "</html>";

?>