<!DOCTYPE html>
<html lang="en">
<head>
    <title>jQuery TextArea Sample</title>
    <link rel="stylesheet" href="jqwidgets/jqwidgets/styles/jqx.base.css" type="text/css" />
    <script type="text/javascript" src="jqwidgets/jqwidgets/scripts/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxcore.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxscrollbar.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxtextarea.js"></script>
    <script type="text/javascript" src="jqwidgets/jqwidgets/jqxbuttons.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#jqxTextArea').jqxTextArea({ width: 500, height: 500, placeHolder: 'Enter a sentence...' });
        });
    </script>
    <script>
        
        </script>
  
        
         
        
        
        
         <script type="text/javascript">
            $(document).ready(function () {
                // Create Push Button.
                $("#jqxButton").jqxButton({ width: '150', height: '25'});
                // Create Submit Button.
                $("#jqxSubmitButton").jqxButton({ width: '150', height: '25'});
                // Create Disabled Button
                $("#jqxDisabledButton").jqxButton({ disabled: true, width: '150', height: '25'});
                // Subscribe to Click events.
                $("#jqxButton").on('click', function () {
                    alert('Button Clicked');
                });
                $("#jqxSubmitButton").on('click', function () {
                    alert('Submit Button Clicked');
                });
            });
        </script>
        
        
        
        
        
        
        
</head>
<body>
       <form class="form" id="form" target="form-iframe"  method="post" action="Article.php">
            {foreach from=$article_writer key=k item=data}
           title :   <input type="text" id="input" name="title" value="{$data.title}"/><br><br>
   article content : <textarea id="jqxTextArea" name="content_article" >{$data.article_content}</textarea>
          <div style='width: 150px;' id='jqxWidget'>
           
           
           
              
              
        </div>
   <input type="hidden" id="input" name="id" value="{$data.id}"/> <br><br>
   <input type="hidden" id="input" name="case_to_be" value="2"/> <br><br>
     <div>
                <input style='margin-top: 20px;' type="submit" value="save update" id='jqxSubmitButton' />
            </div>
            </form>
   {/foreach}
</body>
</html>