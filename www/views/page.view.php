<div i    }d="container" class="container">
    <div class="content">
        <div class="index-title">
            <h3>Gestion des pages</h3>
        </div>
        <div class="index-header">
            <div class="add-colLeft">
                <h4>Liste des pages (15)</h4>
                <div class="page-list">
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
                    </ul>
                </div>
            </div>
            <div class="add-colRight">
                <div class="">
                    <h4>Ajouter une page</h4>
                    <div class="add-page">
                        <input type="text" name="" value="" placeholder="Nom de la page">
                        <input type="submit" name="" value="Ajouter">
                    </div>
                </div>
            </div>
        </div>
        <div class="index-body">
            <div class="index-body-left">
                <h4>Elements</h4>
                <div class="snippet-list">
                    <p>Container</p>
                    <p>Jumbotron</p>
                    <p>Table</p>
                    <p>Card</p>
                    <p>Button</p>
                    <p>Image</p>
                    <p>Alert</p>
                    <p>Navbar</p>
                    <p>Text input</p>
                    <p>Select input</p>
                    <p>Text area</p>
                    <p>Radio button</p>
                    <p>Checkbox</p>
                    <p>Pagination</p>
                </div>
            </div>

            <div class="index-body-center">
                <button id="btn-body-center-modal" onclick="openmodal()">Voir la page</button>
                <iframe src="database.php" height="800"></iframe>
                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close" onclick="closemodal()">&times;</span>
                        <iframe src="database.php" height="800"></iframe>
                    </div>
                </div>
            </div>

            <div class="index-body-right">
                <h4>Style</h4>
                <div class="style-list">
                    <p id="general" onclick="addStyle(this.id);">General <i class="fas fa-sort-down"></i></p>
                    <div class="snippet-general">
                        <div class="general-id">
                            <label for="">Id</label>
                            <input type="text" name="general-id" value="" placeholder="id">
                        </div>
                        <div class="general-class">
                            <label for="">Class</label>
                            <input type="text" name="general-class" value="" placeholder="class">
                        </div>
                    </div>
                    <p id="display" onclick="addStyle(this.id);">Display <i class="fas fa-sort-down"></i></p>
                    <div class="snippet-display">
                        <div class="display-display">
                            <label for="">Display</label>
                            <select class="" name="display-display">
                                <option value="">Block</option>
                                <option value="">Inline</option>
                                <option value="">Inline-block</option>
                                <option value="">None</option>
                            </select>
                        </div>
                        <div class="display-position">
                            <label for="">Position</label>
                            <select class="" name="display-position">
                                <option value="">Static</option>
                                <option value="">Fixed</option>
                                <option value="">Relative</option>
                                <option value="">Absolute</option>
                            </select>
                        </div>
                        <div class="display-top">
                            <label for="">Top</label>
                            <select class="" name="display-top">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="display-bottom">
                            <label for="">Bottom</label>
                            <select class="" name="display-bottom">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="display-left">
                            <label for="">Left</label>
                            <select class="" name="display-left">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="display-right">
                            <label for="">Right</label>
                            <select class="" name="display-right">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="display-float">
                            <label for="">Float</label>
                            <select class="" name="display-float">
                                <option value="">None</option>
                                <option value="">Left</option>
                                <option value="">Right</option>
                            </select>
                        </div>
                        <div class="display-opacity">
                            <label for="">Opacity</label>
                            <input name="display-opacity" type="range" min="0" max="1" step="0.1" class="">
                        </div>
                        <div class="display-background-color">
                            <label for="">Background-color</label>
                            <input name="background-color" type="color" value="1" pattern="#[a-f0-9]{6}" class="">
                        </div>
                        <div class="display-color">
                            <label for="">Text color</label>
                            <input name="background-color" type="color" value="1" pattern="#[a-f0-9]{6}" class="">
                        </div>
                    </div>
                    <p id="typographie" onclick="addStyle(this.id);">Typographie <i class="fas fa-sort-down"></i></p>
                    <div class="snippet-typography">
                        <div class="typography-font-family">
                            <label for="">Font family</label>
                            <select class="" name="typography-font-family">
                                <option value="">Default</option>
                                <option value="Arial, Helvetica, sans-serif">Arial</option>
                                <option value="Lucida Sans Unicode" ,="" "lucida="" grande",="" sans-serif"="">Lucida Grande</option>
                                <option value="Palatino Linotype" ,="" "book="" antiqua",="" palatino,="" serif"="">Palatino Linotype</option>
                                <option value="" times="" new="" roman",="" times,="" serif"="">Times New Roman</option>
                                <option value="Georgia, serif">Georgia, serif</option>
                                <option value="Tahoma, Geneva, sans-serif">Tahoma</option>
                                <option value="Comic Sans MS, cursive, sans-serif">Comic Sans</option>        <option value="Verdana, Geneva, sans-serif">Verdana</option>
                                <option value="Impact, Charcoal, sans-serif">Impact</option>
                                <option value="Arial Black, Gadget, sans-serif">Arial Black</option>        <option value="Trebuchet MS, Helvetica, sans-serif">Trebuchet</option>        <option value="Courier New" ,="" courier,="" monospace"="">Courier New", Courier, monospace</option>
                                <option value="Brush Script MT, sans-serif">Brush Script</option>
                            </select>
                        </div>
                        <div class="typography-class">
                            <label for="">Font weight</label>
                            <select class="" name="typography-class">
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
                        <div class="typography-text-align">
                            <label for="">Text align</label>
                            <select class="" name="typography-text-align">
                                <option value="">None</option>
                                <option value="">Underline</option>
                                <option value="">Overline</option>
                                <option value="">Line Through</option>
                                <option value="">Underline overline</option>
                            </select>
                        </div>
                    </div>
                    <p id="size" onclick="addStyle(this.id);">Size <i class="fas fa-sort-down"></i></p>
                    <div class="snippet-size">
                        <div class="size-width">
                            <label for="">Width</label>
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="size-height">
                            <label for="">Height</label>
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="size-min-width">
                            <label for="">Min width</label>
                            <input name="min-width" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="size-min-height">
                            <label for="">Min height</label>
                            <input name="min-height" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="size-max-width">
                            <label for="">Max width</label>
                            <input name="max-width" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="size-max-height">
                            <label for="">Max height</label>
                            <input name="max-height" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                    </div>
                    <p id="margin" onclick="addStyle(this.id);">Margin <i class="fas fa-sort-down"></i></p>
                    <div class="snippet-margin">
                        <div class="margin-top">
                            <label for="">Top</label>
                            <input name="margin-top" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="margin-bottom">
                            <label for="">Bottom</label>
                            <input name="margin-bottom" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="margin-left">
                            <label for="">Left</label>
                            <input name="margin-left" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="margin-right">
                            <label for="">Right</label>
                            <input name="margin-right" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                    </div>
                    <p id="padding" onclick="addStyle(this.id);">Padding <i class="fas fa-sort-down"></i></p>
                    <div class="snippet-padding">
                        <div class="padding-top">
                            <label for="">Top</label>
                            <input name="padding-top" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="padding-bottom">
                            <label for="">Bottom</label>
                            <input name="padding-bottom" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="padding-left">
                            <label for="">Left</label>
                            <input name="padding-left" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="padding-right">
                            <label for="">Right</label>
                            <input name="padding-right" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                    </div>
                    <p id="border" onclick="addStyle(this.id);">Border <i class="fas fa-sort-down"></i></p>
                    <div class="snippet-border">
                        <div class="border-style">
                            <label for="">Style</label>
                            <select class="" name="border-style">
                                <option value="">Default</option>
                                <option value="solid">Solid</option>
                                <option value="dotted">Dotted</option>
                                <option value="dashed">Dashed</option>
                            </select>
                        </div>
                        <div class="border-width">
                            <label for="">Width</label>
                            <input name="border-width" type="number" value="none" class="">
                            <select class="" name="unit">
                                <option value="">em</option>
                                <option value="">px</option>
                                <option value="">%</option>
                                <option value="">rem</option>
                                <option value="">auto</option>
                            </select>
                        </div>
                        <div class="border-color">
                            <label for="">Color</label>
                            <input name="border-color" type="color" value="" pattern="#[a-f0-9]{6}" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>