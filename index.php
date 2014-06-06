<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masterplan</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,300italic,300,100,700' rel='stylesheet' type='text/css'>

      <!-- JS Imports -->
    
    <script src="//code.jquery.com/jquery-1.11.0.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>-->
    <script type="text/javascript" src="js/jquery.jsPlumb-1.6.2-min.js"></script>
    <script type="text/javascript" src="js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.equalizer.js"></script>
    
    
    
    
     <script>
    
     
     
        $(document).ready(function() {
            var name = $( "#name" ),
            group = $( "#rowgroup" ),
            state = $( "#statecolor" ),
            allFields = $( [] ).add( name ).add( group ).add( state ),
            tips = $( ".validateTips" );
            /*
            function updateTips( t ) {
                tips
                .text( t )
                .addClass( "ui-state-highlight" );
                setTimeout(function() {
                    tips.removeClass( "ui-state-highlight", 1500 );
                }, 500 );
            }
            function checkLength( o, n, min, max ) {
                if ( o.val().length > max || o.val().length < min ) {
                    o.addClass( "ui-state-error" );
                    updateTips( "Length of " + n + " must be between " +
                    min + " and " + max + "." );
                    return false;
                } else {
                return true;
                }
            }
            function checkRegexp( o, regexp, n ) {
                if ( !( regexp.test( o.val() ) ) ) {
                    o.addClass( "ui-state-error" );
                    updateTips( n );
                    return false;
                } else {
                    return true;
                }
            }
            */
            var count = 0;
            
            var targetDragOptions = {
                axis: "x",
            };
            
            $( "#dialog-form" ).dialog({
                autoOpen: false,
                height: 500,
                width: 350,
                modal: true,
                buttons: { 
                    "Neue Modul": function() {
                        var bValid = true;
                        allFields.removeClass( "ui-state-error" );
                        
                        
                        /*
                        bValid = bValid && checkLength( name, "username", 3, 16 );
                        bValid = bValid && checkLength( email, "email", 6, 80 );
                        bValid = bValid && checkLength( password, "password", 5, 16 );
                        bValid = bValid && checkRegexp( name, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
                        // From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
                        bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
                        bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
                        */
                        
                        if ( bValid ) {                                                
                            var id = $("#rowgroup").children(":selected").attr("id");                        
                            var style = $("#statecolor").children(":selected").attr("id");                        
                            
                            var module = $("<div>",{ id: "module"+count}).html(name.val()).css({width: '120px'}).appendTo("#"+id);
                            jsPlumb.addEndpoint($("#module"+count), targetEndpoint);
                            jsPlumb.addEndpoint($("#module"+count), sourceEndpoint);
                            jsPlumb.draggable($("#module"+count));
                            $(module).addClass(style);
                            $(module).addClass("module");
                            /*module.draggable({  containment: 'parent',
                                                grid: [ 90, 0 ],
                                                axis: 'x'
                                            });*/
                            count++;
                            $( this ).dialog( "close" );
                            jsPlumb.repaintEverything();
                        } 
                    },
                    
                    Cancel: function() {
                        $( this ).dialog( "close" );                    
                    },
                }
            });
            
            $( "#addModule" )
                .button()
                .click(function() {
                    $( "#dialog-form" ).dialog( "open" );
                });
            
            
            
            var oriVal;
            $(".row").on('dblclick', '.module', function () {
                oriVal = $(this).text();
                $(this).text("");
                $("<input type='text'>").appendTo(this).focus();
            });
            
            /* REFACTOR THIS CODE
            function updateText() {  
                var $this = $(this);
                $this.parent().text($this.val() || oriVal);
                $this.remove(); // Don't just hide, remove the element.
                jsPlumb.repaintEverything(); 
            };
            
            $(".row").on({
                blur: function() {
                    updateText();
                },
                keypress: function(e) {                        
                    if (e.keyCode == '13') {
                        updateText();
                    }
                }
            }, ".module > input");
            */
            
            $(".row").on('blur', '.module > input', function () {                
                var $this = $(this);
                $this.parent().text($this.val() || oriVal);
                $this.remove();
                jsPlumb.repaintEverything();
            });
            
            $(".row").on('keyup', '.module > input', function (e) {                
                if (e.keyCode == '13') { 
                    var $this = $(this);
                    $this.parent().text($this.val() || oriVal);
                    $this.remove();
                    jsPlumb.repaintEverything(); 
                }
            });
            
            
        //Setting up drop options
        

            //Setting up a Target endPoint
            var targetColor = "#aa1100";
            var targetEndpoint = {
                //container: "parent",
                anchor: "TopCenter", //Placement of Dot
                endpoint: ["Dot", { radius: 4}], //Other types are rectangle, Image, Blank, Triangle
                paintStyle: { fillStyle: targetColor }, //Line color
                isSource: true, //Starting point of the connector
                scope: "red dot",
                connectorStyle: { strokeStyle: targetColor, lineWidth: 5 }, // Means Bridge width and bridge color
                connector: ["Flowchart", { curviness: 50}], //Other properties Bezier
                maxConnections: -1, //No upper limit
                isTarget: true, //Means same color is allowed to accept the connection
                //dragOptions: targetDragOptions, //Means when the drag is started, other terminals will start to highlight
            };

            //Setting up a Source endPoint
            var sourceColor = "#aa1100";
            var sourceEndpoint = {
                //container: "parent",
                anchor: "BottomCenter",
                endpoint: ["Dot", { radius: 4}],
                paintStyle: { fillStyle: sourceColor },
                isSource: true,
                scope: "red dot",
                connectorStyle: { strokeStyle: sourceColor, lineWidth: 5 },
                connector: ["Flowchart", { curviness: 50}],
                maxConnections: -1,
                isTarget: true,
                //dragOptions: targetDragOptions,
            };

            jsPlumb.bind("ready", function () {
                
                //Set up endpoints on the divs
                jsPlumb.addEndpoint($("#module"+count), targetEndpoint);
                jsPlumb.addEndpoint($("#module"+count), sourceEndpoint);

                jsPlumb.draggable($("#module"+count));
                //jsPlumb.repaint("#module"+count);
            });
            
            
        
            

        });

           /* 
                $( "#addConnect" ).on('click', function() {        
                    jsPlumb.connect({
                        source:"module0", 
                        target:"module1",
                        anchors:["Right", "Left" ],
                        endpoint:"Rectangle",
                        endpointStyle:{ fillStyle: "yellow" }
                    });
                });
               */
               
       // FIX THIS CODE HERE TO GET CONNECTORS WORKING
   
    </script>
    
</head>
<body>

    <header id="header" class="header">
        <button id="addModule" class="">Add a Module</button>
        <button id="addConncet" class="">Connect Module</button>

    
    
    </header>
    <div class="wrapper">
    
    <div id="dialog-form" title="Create new module">
        <p class="validateTips">All form fields are required.</p>
        <form>
        <fieldset>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="text">
        <label for="rowgroup">Row Group</label>
        <select id="rowgroup">
            <option value="entwicklung" id="entwicklung">Entwicklung</option>
            <option value="kaufservice" id="kaufservice">Kaufm. Service / CO</option>
            <option value="einkauf" id="einkauf">SCM / Einkauf</option>
            <option value="lager" id="lager">WE / Lager</option>
            <option value="qs" id="qs">QS</option>
            <option value="arbeit" id="arbeit">Arbeitsvorbereitung</option>
            <option value="produktplanung" id="produktplanung">Produktionsplanung</option>
            <option value="finishen" id="finishen">Produktion Finishen</option>
            <option value="vertrieb" id="vertrieb">Vertrieb</option>
        </select>
        <label for="statecolor">State</label>
        <select id="statecolor">
            <option id="progressdb" value="progress">Progress Database</option>
            <option id="web" value="web">Weblösungen</option>
            <option id="sap" value="sap">SAP Tool</option>
        </select>
        </fieldset>
        </form>
    </div>
        <div class="row">
            
            <div class="small-2 columns row-heading">
            Entwicklung
            </div>
            <div class="small-10 columns left-border" id="entwicklung">
               
            </div>
        </div>
        <div class="row">
            <div class="small-2 columns row-heading">
            Kaufm. Service / CO
            </div>
            <div class="small-10 columns left-border" id="kaufservice">
            </div>
        </div>
        <div class="row">
            <div class="small-2 columns row-heading">
            SCM / Einkauf
            </div>
            <div class="small-10 columns left-border" id="einkauf">
            </div>
        </div>
        <div class="row">   
            <div class="small-2 columns row-heading">
            WE / Lager
            </div>
            <div class="small-10 columns left-border" id="lager">
            </div>
        </div>      
        <div class="row">
            <div class="small-2 columns row-heading">
            QS
            </div>
            <div class="small-10 columns left-border" id="qs">
            </div>
        </div>     
        <div class="row"> 
            <div class="small-2 columns row-heading">
            Arbeitsvorbereitung<br/>
            UVEX-Cagi
            </div>
            <div class="small-10 columns left-border" id="arbeit">
            </div>
        </div>     
        <div class="row"> 
            <div class="small-2 columns row-heading">
            Produktionsplanung<br/>
            AMP-Desma<br/>
            Einlastung
            </div>
            <div class="small-10 columns left-border" id="produktplanung">
            </div>
        </div>       
        <div class="row">
            <div class="small-2 columns row-heading">
            Produktion Finishen<br/>
            UVEX-Cagi
            </div>
            <div class="small-10 columns left-border" id="finishen">
            </div>
        </div>       
        <div class="row"> 
            <div class="small-2 columns row-heading">
            Vertrieb
            </div>
            <div class="small-10 columns left-border" id="vertrieb">
            </div>
        </div>       
        <footer id="footer" class="footer">
            Developed by Derek Onay | All rights reserved 2014.
        </footer>
    </div>
    
    
    <script>
       
        </script>
  
</body>
</html>