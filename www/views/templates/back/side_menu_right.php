<div id="menu-right" class="buildy-grid-v-start min-width-250 blue-buildy-bg grey-font">
  <div id="menu-right-scroll" class="buildy-grid-v-center column">
      <div class="space-15"></div>
      <div id="add-content" class="col-90-center column">
        <div class="space-20"></div>
        <div class="col-100-center">
          <h2 class="title-h2">Composants</h2>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("title", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("text", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("button", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("cardColumn", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("list", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("href", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("welcome", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("welcome", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("welcome", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("welcome", ""); ?>
        </div>
        <hr class="width-100 space-20">
        <div class="draggable" draggable="true">
            <?php $this->addComponent("welcome", ""); ?>
        </div>
        <hr class="width-100 space-20">

        <div class="draggable" draggable="true">

        </div>
        <button class="button-classic" type="button" name="button">Conainer</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Jumbotron</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Table</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Card</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Button</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Image</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Alert</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Navbar</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Text input</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Select input</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Text area</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Radio button</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Checkbox</button>
        <hr class="width-100 space-20">
        <button class="button-classic" type="button" name="button">Pagination</button>
        <hr class="width-100 space-20">
      </div>
      <div id="menu-right-css" class="col-90-center menu-right-css column">
        <div class="col-100-center">
          <button class="button-classic-error" onclick="closeCss();" type="button" name="button">Composants</button>
        </div>
        <div class="space-40"></div>
        <div class="buildy-grid-v-center col-100-center column">
          <label for="textarea-content">Contenu</label>
          <textarea id="textarea-content" name="name" rows="6" cols="24"></textarea>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
             <div class="column width-100">
               <div class="space-10"></div>
               <button class="button-classic col-100-space-b showSnippet">Display <i class="fas fa-sort-down"></i></button>
               <div class="snippet snippet-display">
                  <div class="space-10"></div>
                  <div class="column">
                     <label for="">Opacity</label>
                     <input id="opacity" class="input-classic-200" name="display-opacity" type="range" min="0" max="1" step="0.1" class="" value="1">
                  </div>
                  <div class="space-10"></div>
                  <div class="column">
                     <label for="">Background-color</label>
                     <input id="background-color" class="input-classic-200" name="background-color" type="color" value="#ffffff" pattern="#[a-f0-9]{6}" class="">
                  </div>
                  <div class="space-10"></div>
                  <div class="column">
                     <label for="">Text color</label>
                     <input id="color" class="input-classic-200" name="background-color" type="color" value="1" pattern="#[a-f0-9]{6}" class="">
                  </div>
                  <div class="space-10"></div>
               </div>
               <div class="space-10"></div>
               <button class="button-classic col-100-space-b showSnippet">Typographie <i class="fas fa-sort-down"></i></button>
               <div class="snippet snippet-typography">
                 <div class="space-10"></div>
                 <div class="column">
                    <label for="">Font size</label>
                    <input id="font-size-input" class="input-classic-200" name="width" type="number" value="none" class="">
                    <select id="font-size-select" class="input-classic-200" name="unit">
                       <option value="em">em</option>
                       <option value="px">px</option>
                       <option value="%">%</option>
                       <option value="rem">rem</option>
                    </select>
                 </div>
                  <div class="column">
                     <label for="">Font family</label>
                     <select id="font-family" class="input-classic-200" name="typography-font-family">
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
                     <select id="font-weight" class="input-classic-200" name="typography-class">
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
               </div>
               <div class="space-10"></div>
               <button class="button-classic col-100-space-b showSnippet">Size <i class="fas fa-sort-down"></i></button>
               <div class="snippet snippet-size">
                 <div class="space-10"></div>
                  <div class="column">
                     <label for="">Width</label>
                     <input id="width-input" class="input-classic-200" name="width" type="number" value="none" class="">
                     <select id="width-select" class="input-classic-200" name="unit">
                        <option value="em">em</option>
                        <option value="px">px</option>
                        <option value="%">%</option>
                        <option value="rem">rem</option>
                     </select>
                  </div>
                  <div class="space-10"></div>
                  <div class="column">
                     <label for="">Height</label>
                     <input id="height-input" class="input-classic-200" name="height" type="number" value="none" class="">
                     <select id="height-select" class="input-classic-200" name="unit">
                        <option value="em">em</option>
                        <option value="px">px</option>
                        <option value="%">%</option>
                        <option value="rem">rem</option>
                     </select>
                  </div>
               </div>
               <div class="space-10"></div>
               </div>
               <div class="space-40"></div>
             </div>
          </div>
          <div class="col-90-center">
            <button id="valid-html" class="button-classic-succes col-100-center">Valider</button>
          </div>
          <div class="space-10"></div>
          <div class="col-90-center">
            <button id="delete-html" class="button-classic-error col-100-center">Supprimer</button>
          </div>
          <div class="space-20"></div>
      </div>
  </div>
</div>
