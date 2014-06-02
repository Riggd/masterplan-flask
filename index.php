<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Masterplan</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery.gridster.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,300italic,300,100,700' rel='stylesheet' type='text/css'>

</head>
<body>

    <header id="header" class="header">
    <button id="addModule" class="">Add a Module</button>

    
    
    
    </header>
    <div class="wrapper">
    
    <div id="dialog-form" title="Create new module">
        <p class="validateTips">All form fields are required.</p>
        <form>
        <fieldset>
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="text ui-widget-content ui-corner-all">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" value="" class="text ui-widget-content ui-corner-all">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" value="" class="text ui-widget-content ui-corner-all">
        </fieldset>
        </form>
    </div>
        <div class="row">
            <div class="small-2 columns row-heading">
            Entwicklung
            </div>
            <div class="small-10 columns entwick" id="entwicklung">
            </div>
        </div>
        <div class="row">
            <div class="small-2 columns row-heading">
            Kaufm. Service / CO
            </div>
            <div class="small-10 columns" id="entwicklung">
            </div>
        </div>
        <div class="row">
            <div class="small-2 columns row-heading">
            SCM / Einkauf
            </div>
            <div class="small-10 columns" id="entwicklung">
            </div>
        </div>
        <div class="row">   
            <div class="small-2 columns row-heading">
            WE / Lager
            </div>
            <div class="small-10 columns" id="entwicklung">
            </div>
        </div>      
        <div class="row">
            <div class="small-2 columns row-heading">
            QS
            </div>
            <div class="small-10 columns" id="entwicklung">
            </div>
        </div>     
        <div class="row"> 
            <div class="small-2 columns row-heading">
            Arbeitsvorbereitung UVEX-Cagi
            </div>
            <div class="small-10 columns" id="entwicklung">
            </div>
        </div>     
        <div class="row"> 
            <div class="small-2 columns row-heading">
            Produktionsplanung<br/>
            AMP-Desma<br/>
            Einlastung
            </div>
            <div class="small-10 columns" id="entwicklung">
            </div>
        </div>       
        <div class="row">
            <div class="small-2 columns row-heading">
            Produktion Finishen<br/>
            UVEX-Cagi
            </div>
            <div class="small-10 columns" id="entwicklung">
            </div>
        </div>       
        <div class="row"> 
            <div class="small-2 columns row-heading">
            Vertrieb
            </div>
            <div class="small-10 columns" id="entwicklung">
            </div>
        </div>       
        <footer id="footer" class="footer">
            Developed by Derek Onay | All rights Reserved. 2014
        </footer>
    </div>
    
    <!-- JS Imports -->
    
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
    <script type="text/javascript" src="js/vendor/modernizr.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.js"></script>
    <script type="text/javascript" src="js/foundation/foundation.equalizer.js"></script>
    
    
    
     <script>
        $(function() {
        var name = $( "#name" ),
        email = $( "#email" ),
        password = $( "#password" ),
        allFields = $( [] ).add( name ).add( email ).add( password ),
        tips = $( ".validateTips" );
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
        $( "#dialog-form" ).dialog({
            autoOpen: false,
            height: 300,
            width: 350,
            modal: true,
            buttons: {
                "Create an account": function() {
                    var bValid = true;
                    allFields.removeClass( "ui-state-error" );
                    bValid = bValid && checkLength( name, "username", 3, 16 );
                    bValid = bValid && checkLength( email, "email", 6, 80 );
                    bValid = bValid && checkLength( password, "password", 5, 16 );
                    bValid = bValid && checkRegexp( name, /^[a-z]([0-9a-z_])+$/i, "Username may consist of a-z, 0-9, underscores, begin with a letter." );
                    // From jquery.validate.js (by joern), contributed by Scott Gonzalez: http://projects.scottsplayground.com/email_address_validation/
                    bValid = bValid && checkRegexp( email, /^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i, "eg. ui@jquery.com" );
                    bValid = bValid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
                    if ( bValid ) {
                        $( "#users tbody" ).append( "<tr>" +
                        "<td>" + name.val() + "</td>" +
                        "<td>" + email.val() + "</td>" +
                        "<td>" + password.val() + "</td>" +
                        "</tr>" );
                        $( this ).dialog( "close" );
                    }
                },
                Cancel: function() {
                        $( this ).dialog( "close" );
                }
            },
                close: function() {
                    allFields.val( "" ).removeClass( "ui-state-error" );
                }
        });
        $( "#addModule" )
            .button()
            .click(function() {
            $( "#dialog-form" ).dialog( "open" );
        });
        });
        </script>
    
    
    
    <script>
        /*$("#addModule").click(function () {
            var module = $('<div class="module">Testing</div>');
            $('#entwicklung').append(module);
            module.draggable({  containment: 'parent',
                                grid: [ 100, 0 ]
                            });
        });
        */
        
        var oriVal;
        $("#entwicklung").on('dblclick', '.module', function () {
            oriVal = $(this).text();
            $(this).text("");
            $("<input type='text'>").appendTo(this).focus();
        });
        $("#entwicklung").on('focusout', '.module > input', function () {
            var $this = $(this);
            $this.parent().text($this.val() || oriVal);
            $this.remove(); // Don't just hide, remove the element.
        });
     
    </script>
</body>
</html>