<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Serverless editor: Immediate code push</title>
  <meta name='description' content='You can write, publish single-purpose, stand-alone ruby scripts on a REST endpoint'>
  <meta name='keywords' content='Serverless Ruby,Ruby Editor, Online ruby editor, Sinatra hosting, ruby REST, Microservices, AWS Lambda, Google Cloud Functions'>
  <meta name='author' content='Serverlessly.io'> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<style type="text/css" media="screen">

    #editor {
        position: relative;
        height: 600px;
    }
    #updatecode {
      text-align: right;
      float: right;
    }


.half {
  width: 50%;
}
  </style>


<style>


@import url(http://fonts.googleapis.com/css?family=Roboto);

/****** LOGIN MODAL ******/
.loginmodal-container {
  padding: 30px;
  max-width: 350px;
  width: 100% !important;
  background-color: #F7F7F7;
  margin: 0 auto;
  border-radius: 2px;
  box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
  overflow: hidden;
  font-family: roboto;
}

.loginmodal-container h1 {
  text-align: center;
  font-size: 1.8em;
  font-family: roboto;
}

.loginmodal-container input[type=submit] {
  width: 100%;
  display: block;
  margin-bottom: 10px;
  position: relative;
}

.loginmodal-container input[type=text], input[type=password] {
  height: 44px;
  font-size: 16px;
  width: 100%;
  margin-bottom: 10px;
  -webkit-appearance: none;
  background: #fff;
  border: 1px solid #d9d9d9;
  border-top: 1px solid #c0c0c0;
  /* border-radius: 2px; */
  padding: 0 8px;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
}

.loginmodal-container input[type=text]:hover, input[type=password]:hover {
  border: 1px solid #b9b9b9;
  border-top: 1px solid #a0a0a0;
  -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
  box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
}

.loginmodal {
  text-align: center;
  font-size: 14px;
  font-family: 'Arial', sans-serif;
  font-weight: 700;
  height: 36px;
  padding: 0 8px;
/* border-radius: 3px; */
/* -webkit-user-select: none;
  user-select: none; */
}

.loginmodal-submit {
  /* border: 1px solid #3079ed; */
  border: 0px;
  color: #fff;
  text-shadow: 0 1px rgba(0,0,0,0.1); 
  background-color: #4d90fe;
  padding: 17px 0px;
  font-family: roboto;
  font-size: 14px;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
}

.loginmodal-submit:hover {
  /* border: 1px solid #2f5bb7; */
  border: 0px;
  text-shadow: 0 1px rgba(0,0,0,0.3);
  background-color: #357ae8;
  /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
}

.loginmodal-container a {
  text-decoration: none;
  color: #666;
  font-weight: 400;
  text-align: center;
  display: inline-block;
  opacity: 0.6;
  transition: opacity ease 0.5s;
} 

.login-help{
  font-size: 12px;
}

</style>

</head>
<body>


<div class="container">

<div class="input-group" id="topbar">
  <span class="input-group-addon" id="basic-addon3">http://serverlessly.io/</span>
  <input type="text" class="form-control" id="endpoint" aria-describedby="basic-addon3" placeholder="Yourendpointname" />
     <span class="input-group-btn">
        <button class="btn btn-secondary" type="button" id="postcode">Publishcode</button>
      </span>
</div>

   <div class="panel panel-default">
        <div class="panel-heading">
             <h3 class="panel-title">Write code </h3>

       </div>
        <div class="panel-body">
            <div id="editor">

#List the gems your are using in the program

gem "json"

# require dependencies

require "json"


# define a function that do some specific task
# Note: It is better if it returns json
# you can access input parameters as params[:varname1], params[:whatevernameyoupassing]...etc
# if you planning to use via post, access json data as  data = JSON.parse(request.body.read)
# if it is file, file = params[:file][:tempfile]; filestring = file.read

def myfunc


  # Write your cool code here


end


#call that function
myfunc


# Click on Pusblishcode with an available endpoint          

 </div>
</div>
</div>

    <div class="input-group pull-right half">
      <input type="text" id="token" class="form-control" placeholder="Token: 4 letter string that showed when you click on Publishcode">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="button" id="update">UpdateExisting</button>
      </span>
    </div>

<br/>
<br/>
<br/>
<Strong>Public Endpoints :</strong> <a href="http://serverlessly.io/public"> serverlessly.io/public </a>
<br/>
<br/>
Your endpoints:
 <p id="links">
</p>

</div>

<script src="https://cdn.jsdelivr.net/ace/1.2.4/min/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/ace/1.2.4/min/ext-language_tools.js" type="text/javascript" charset="utf-8"></script>

<script>

      var a = JSON.parse(localStorage.getItem("links"))||[];
      a.forEach(function(entry) {
         document.getElementById('links').innerHTML += "<br/>"+entry.link;
 //        document.getElementById('links').setAttribute ("href", entry.link); 
     });
  var editor = ace.edit("editor");
    var myCode = editor.getSession().getValue();
    var localCode =  localStorage.getItem("code");
    if (localCode != undefined && localCode != "") {
    
    editor.setValue(localCode, -1);
    }
    editor.setTheme("ace/theme/vibrant_ink");
    editor.session.setMode("ace/mode/ruby");
    editor.setOptions({
        enableBasicAutocompletion: true,
 enableSnippets: true,
        enableLiveAutocompletion: true
    });


   editor.on("input", function() {
   localStorage.setItem("code", editor.getValue())
    })


     $("#postcode").click(function(){
         var myCode = editor.getSession().getValue();
         var endpoint = $("#endpoint")[0].value;
         var allEntries = JSON.parse(localStorage.getItem("links")) || [];
         var entry = { "link": "http://serverlessly.io/"+endpoint};
         allEntries.push(entry);
         localStorage.setItem("links", JSON.stringify(allEntries)); 
 
        $.post("http://serverlessly.io/publicruby",{code: myCode, endpoint: endpoint}, function(data, status){
            
    $("<div class=\"alert alert-success\" role=\"alert\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a>  <strong>Success! -- </strong> Your endpoint -- <a href=\"http://serverlessly.io/"+endpoint+"\" class=\"alert-link\"> http://serverlessly.io/"+endpoint+"</a> -- Token for future updates: <strong>"+data+"</strong> -- Access all public endpoints and code <a href=\"/public\" >serverlessly.io/public</a></div>").insertAfter('#topbar');          });
    });

    $("#update").click(function(){
        var myCode = editor.getSession().getValue();
         var endpoint = $("#endpoint")[0].value;
         var token = $("#token")[0].value;
        $.post("http://serverlessly.io/publicruby",{code: myCode, endpoint: endpoint, token: token},  function(data, status){
    $("<div class=\"alert alert-success\" role=\"alert\"><a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">×</a> <strong>Success!</strong> Your endpoint  <a href=\"http://serverlessly.io/"+endpoint+"\" class=\"alert-link\"> http://serverlessly.io/"+endpoint+"</a> Token for future updates: <strong>"+data+"</strong>Access all public endpoints and code <a href=\"/public\">serverlessly.io/public</a> </div> ").insertAfter('#topbar');       });
       
    });
 

</script>

</body>
</html>

