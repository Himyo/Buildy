<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <main>
      <?php include "header.php"; ?>
      <?php include "header_640.php"; ?>
      <div id="main-container" class="main-container">
         <?php include "side_menu_mysite.php"; ?>
         <div id="container" class="container">
            <div class="content">
              <div class="space-15"></div>
              <div class="buildy-grid-v-center col-100-center">
                <h1 class="title-h1">Gestion des pages</h1>
              </div>
              <div class="space-40"></div>
              <div class="buildy-grid-v-top">
                <div class="buildy-grid-v-top col-100-start">
                  <ul>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                     <li>index.php</li>
                  </ul>
                </div>
              </div>
              <div class="buildy-grid-v-start col-100-space-b">
                <div class="col-10-left">
                  <div class="column">
                    <button class="button-classic" type="button">Container</button>
                    <button class="button-classic" type="button">Jumbotron</button>
                    <button class="button-classic" type="button">Table</button>
                    <button class="button-classic" type="button">Card</button>
                    <button class="button-classic" type="button">Button</button>
                    <button class="button-classic" type="button">Image</button>
                    <button class="button-classic" type="button">Alert</button>
                    <button class="button-classic" type="button">Navbar</button>
                    <button class="button-classic" type="button">Text input</button>
                    <button class="button-classic" type="button">Select input</button>
                    <button class="button-classic" type="button">Text area</button>
                    <button class="button-classic" type="button">Radio button</button>
                    <button class="button-classic" type="button">Checkbox</button>
                    <button class="button-classic" type="button">Pagination</button>
                  </div>
                </div>
                <div class="col-60-center">
                  <iframe src="index.php" width="100%" height="600px"></iframe>
                </div>
                <div class="col-20-right">
                   <div class="column">
                     <button class="button-classic col-100-space-b" onclick="addStyle(this.id);">General <i class="fas fa-sort-down"></i></button>
                     <div class="snippet-general">
                       <div class="space-10"></div>
                        <div class="column">
                           <label for="">Id</label>
                           <input class="input-classic" type="text" name="general-id" value="" placeholder="id">
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Class</label>
                           <input class="input-classic" type="text" name="general-class" value="" placeholder="class">
                        </div>
                     </div>
                     <div class="space-10"></div>
                     <button class="button-classic col-100-space-b" onclick="addStyle(this.id);">Display <i class="fas fa-sort-down"></i></button>
                     <div class="snippet-display">
                       <div class="space-10"></div>
                        <div class="column">
                           <label for="">Display</label>
                           <select class="input-classic" name="display-display">
                              <option value="">Block</option>
                              <option value="">Inline</option>
                              <option value="">Inline-block</option>
                              <option value="">None</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Position</label>
                           <select class="input-classic" name="display-position">
                              <option value="">Static</option>
                              <option value="">Fixed</option>
                              <option value="">Relative</option>
                              <option value="">Absolute</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Top</label>
                           <select class="input-classic" name="display-top">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Bottom</label>
                           <select class="input-classic" name="display-bottom">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Left</label>
                           <select class="input-classic" name="display-left">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Right</label>
                           <select class="input-classic" name="display-right">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Float</label>
                           <select class="input-classic" name="display-float">
                              <option value="">None</option>
                              <option value="">Left</option>
                              <option value="">Right</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Opacity</label>
                           <input class="input-classic" name="display-opacity" type="range" min="0" max="1" step="0.1" class="">
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Background-color</label>
                           <input class="input-classic" name="background-color" type="color" value="1" pattern="#[a-f0-9]{6}" class="">
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Text color</label>
                           <input class="input-classic" name="background-color" type="color" value="1" pattern="#[a-f0-9]{6}" class="">
                        </div>
                        <div class="space-10"></div>
                     </div>
                     <button class="button-classic col-100-space-b" onclick="addStyle(this.id);">Typographie <i class="fas fa-sort-down"></i></button>
                     <div class="snippet-typography">
                       <div class="space-10"></div>
                        <div class="column">
                           <label for="">Font family</label>
                           <select class="input-classic" name="typography-font-family">
                              <option value="">Default</option>
                              <option value="Arial, Helvetica, sans-serif">Arial</option>
                              <option value="Lucida Sans Unicode" ,="" "lucida="" grande",="" sans-serif="">Lucida Grande</option>
                              <option value="Palatino Linotype" ,="" "book="" antiqua",="" palatino,="" serif="">Palatino Linotype</option>
                              <option value="" times="" new="" roman",="" times,="" serif"="">Times New Roman</option>
                              <option value="Georgia, serif">Georgia, serif</option>
                              <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                              <option value="Comic Sans MS, cursive, sans-serif">Comic Sans</option>
                              <option value="Verdana, Geneva, sans-serif">Verdana</option>
                              <option value="Impact, Charcoal, sans-serif">Impact</option>
                              <option value="Arial Black, Gadget, sans-serif">Arial Black</option>
                              <option value="Trebuchet MS, Helvetica, sans-serif">Trebuchet</option>
                              <option value="Courier New" ,="" courier,="" monospace="">Courier New", Courier, monospace</option>
                              <option value="Brush Script MT, sans-serif">Brush Script</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Font weight</label>
                           <select class="input-classic" name="typography-class">
                              <option value="">Default</option>
                              <option value="100">Thin</option>
                              <option value="200">Extra-Light</option>
                              <option value="300">Light</option>
                              <option value="400">Normal</option>
                              <option value="500">Medium</option>
                              <option value="600">Semi-Bold</option>
                              <option value="700">Bold</option>
                              <option value="800">Extra-Bold</option>
                              <option value="900">Ultra-Bold</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Text align</label>
                           <select class="input-classic" name="typography-text-align">
                              <option value="">None</option>
                              <option value="">Underline</option>
                              <option value="">Overline</option>
                              <option value="">Line Through</option>
                              <option value="">Underline overline</option>
                           </select>
                        </div>
                     </div>
                     <div class="space-10"></div>
                     <button class="button-classic col-100-space-b" onclick="addStyle(this.id);">Size <i class="fas fa-sort-down"></i></button>
                     <div class="snippet-size">
                       <div class="space-10"></div>
                        <div class="column">
                           <label for="">Width</label>
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Height</label>
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Min width</label>
                           <input class="input-classic" name="min-width" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Min height</label>
                           <input class="input-classic" name="min-height" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Max width</label>
                           <input class="input-classic" name="max-width" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Max height</label>
                           <input class="input-classic" name="max-height" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                     </div>
                     <div class="space-10"></div>
                     <button class="button-classic col-100-space-b" onclick="addStyle(this.id);">Margin <i class="fas fa-sort-down"></i></button>
                     <div class="snippet-margin">
                       <div class="space-10"></div>
                        <div class="column">
                           <label for="">Top</label>
                           <input class="input-classic" name="margin-top" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Bottom</label>
                           <input class="input-classic" name="margin-bottom" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Left</label>
                           <input class="input-classic" name="margin-left" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Right</label>
                           <input class="input-classic" name="margin-right" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                     </div>
                     <div class="space-10"></div>
                     <button class="button-classic col-100-space-b" onclick="addStyle(this.id);">Padding <i class="fas fa-sort-down"></i></button>
                     <div class="snippet-padding">
                        <div class="column">
                           <label for="">Top</label>
                           <input class="input-classic" name="padding-top" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Bottom</label>
                           <input class="input-classic" name="padding-bottom" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Left</label>
                           <input class="input-classic" name="padding-left" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Right</label>
                           <input class="input-classic" name="padding-right" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                     </div>
                     <div class="space-10"></div>
                     <button class="button-classic col-100-space-b" onclick="addStyle(this.id);">Border <i class="fas fa-sort-down"></i></button>
                     <div class="snippet-border">
                       <div class="space-10"></div>
                        <div class="column">
                           <label for="">Style</label>
                           <select class="input-classic" name="border-style">
                              <option value="">Default</option>
                              <option value="solid">Solid</option>
                              <option value="dotted">Dotted</option>
                              <option value="dashed">Dashed</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Width</label>
                           <input class="input-classic" name="border-width" type="number" value="none" class="">
                           <select class="input-classic" name="unit">
                              <option value="">em</option>
                              <option value="">px</option>
                              <option value="">%</option>
                              <option value="">rem</option>
                              <option value="">auto</option>
                           </select>
                        </div>
                        <div class="space-10"></div>
                        <div class="column">
                           <label for="">Color</label>
                           <input class="input-classic" name="border-color" type="color" value="" pattern="#[a-f0-9]{6}" class="form-control">
                        </div>
                        <div class="space-10"></div>
                     </div>
                   </div>
                </div>
              </div>
            </div>
         </div>
      </div>
      <?php include "footer.php"; ?>
    </main>
  </body>
</html>
