# SimpleInstructions
a plugin to give instruction on doing something
add instruction by adding this to mainclass 
------------------------------------------------------------------------------------------
                         case "A":
                            $sender->sendMessage("B");
                            return true;
                        default:
                            return false;
------------------------------------------------------------------------------------------
where a=the command and b=the message you want to send
and also you have to add to the plugin.yml
------------------------------------------------------------------------------------------
    A:
        description: a command
        usage: "/a"
------------------------------------------------------------------------------------------
P.S you can edit the description and usage according to what you want
