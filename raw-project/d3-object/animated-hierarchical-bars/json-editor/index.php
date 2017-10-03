<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>JSON Editor Example</title>

    <!-- placeholders for the theme switcher -->
    <link rel='stylesheet' id='theme_stylesheet'>
    <link rel='stylesheet' id='icon_stylesheet'>

    <style>[class*="foundicon-"] {font-family: GeneralFoundicons;font-style: normal;}</style>
    <script src='dist/jsoneditor.js'></script>

    <script>
    /**
     * LZString compression library
     * Used to create direct links to the demo.
     * NOT REQUIRED for JSON Editor.
     * https://github.com/pieroxy/lz-string
     */
    var LZString={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",_f:String.fromCharCode,compressToBase64:function(e){if(e==null)return"";var t="";var n,r,i,s,o,u,a;var f=0;e=LZString.compress(e);while(f<e.length*2){if(f%2==0){n=e.charCodeAt(f/2)>>8;r=e.charCodeAt(f/2)&255;if(f/2+1<e.length)i=e.charCodeAt(f/2+1)>>8;else i=NaN}else{n=e.charCodeAt((f-1)/2)&255;if((f+1)/2<e.length){r=e.charCodeAt((f+1)/2)>>8;i=e.charCodeAt((f+1)/2)&255}else r=i=NaN}f+=3;s=n>>2;o=(n&3)<<4|r>>4;u=(r&15)<<2|i>>6;a=i&63;if(isNaN(r)){u=a=64}else if(isNaN(i)){a=64}t=t+LZString._keyStr.charAt(s)+LZString._keyStr.charAt(o)+LZString._keyStr.charAt(u)+LZString._keyStr.charAt(a)}return t},decompressFromBase64:function(e){if(e==null)return"";var t="",n=0,r,i,s,o,u,a,f,l,c=0,h=LZString._f;e=e.replace(/[^A-Za-z0-9\+\/\=]/g,"");while(c<e.length){u=LZString._keyStr.indexOf(e.charAt(c++));a=LZString._keyStr.indexOf(e.charAt(c++));f=LZString._keyStr.indexOf(e.charAt(c++));l=LZString._keyStr.indexOf(e.charAt(c++));i=u<<2|a>>4;s=(a&15)<<4|f>>2;o=(f&3)<<6|l;if(n%2==0){r=i<<8;if(f!=64){t+=h(r|s)}if(l!=64){r=o<<8}}else{t=t+h(r|i);if(f!=64){r=s<<8}if(l!=64){t+=h(r|o)}}n+=3}return LZString.decompress(t)},compressToUTF16:function(e){if(e==null)return"";var t="",n,r,i,s=0,o=LZString._f;e=LZString.compress(e);for(n=0;n<e.length;n++){r=e.charCodeAt(n);switch(s++){case 0:t+=o((r>>1)+32);i=(r&1)<<14;break;case 1:t+=o(i+(r>>2)+32);i=(r&3)<<13;break;case 2:t+=o(i+(r>>3)+32);i=(r&7)<<12;break;case 3:t+=o(i+(r>>4)+32);i=(r&15)<<11;break;case 4:t+=o(i+(r>>5)+32);i=(r&31)<<10;break;case 5:t+=o(i+(r>>6)+32);i=(r&63)<<9;break;case 6:t+=o(i+(r>>7)+32);i=(r&127)<<8;break;case 7:t+=o(i+(r>>8)+32);i=(r&255)<<7;break;case 8:t+=o(i+(r>>9)+32);i=(r&511)<<6;break;case 9:t+=o(i+(r>>10)+32);i=(r&1023)<<5;break;case 10:t+=o(i+(r>>11)+32);i=(r&2047)<<4;break;case 11:t+=o(i+(r>>12)+32);i=(r&4095)<<3;break;case 12:t+=o(i+(r>>13)+32);i=(r&8191)<<2;break;case 13:t+=o(i+(r>>14)+32);i=(r&16383)<<1;break;case 14:t+=o(i+(r>>15)+32,(r&32767)+32);s=0;break}}return t+o(i+32)},decompressFromUTF16:function(e){if(e==null)return"";var t="",n,r,i=0,s=0,o=LZString._f;while(s<e.length){r=e.charCodeAt(s)-32;switch(i++){case 0:n=r<<1;break;case 1:t+=o(n|r>>14);n=(r&16383)<<2;break;case 2:t+=o(n|r>>13);n=(r&8191)<<3;break;case 3:t+=o(n|r>>12);n=(r&4095)<<4;break;case 4:t+=o(n|r>>11);n=(r&2047)<<5;break;case 5:t+=o(n|r>>10);n=(r&1023)<<6;break;case 6:t+=o(n|r>>9);n=(r&511)<<7;break;case 7:t+=o(n|r>>8);n=(r&255)<<8;break;case 8:t+=o(n|r>>7);n=(r&127)<<9;break;case 9:t+=o(n|r>>6);n=(r&63)<<10;break;case 10:t+=o(n|r>>5);n=(r&31)<<11;break;case 11:t+=o(n|r>>4);n=(r&15)<<12;break;case 12:t+=o(n|r>>3);n=(r&7)<<13;break;case 13:t+=o(n|r>>2);n=(r&3)<<14;break;case 14:t+=o(n|r>>1);n=(r&1)<<15;break;case 15:t+=o(n|r);i=0;break}s++}return LZString.decompress(t)},compressToUint8Array:function(e){var t=LZString.compress(e);var n=new Uint8Array(t.length*2);for(var r=0,i=t.length;r<i;r++){var s=t.charCodeAt(r);n[r*2]=s>>>8;n[r*2+1]=s%256}return n},decompressFromUint8Array:function(e){if(e===null||e===undefined){return LZString.decompress(e)}else{var t=new Array(e.length/2);for(var n=0,r=t.length;n<r;n++){t[n]=e[n*2]*256+e[n*2+1]}return LZString.decompress(String.fromCharCode.apply(null,t))}},compressToEncodedURIComponent:function(e){return LZString.compressToBase64(e).replace(/=/g,"$").replace(/\//g,"-")},decompressFromEncodedURIComponent:function(e){if(e)e=e.replace(/$/g,"=").replace(/-/g,"/");return LZString.decompressFromBase64(e)},compress:function(e){if(e==null)return"";var t,n,r={},i={},s="",o="",u="",a=2,f=3,l=2,c="",h=0,p=0,d,v=LZString._f;for(d=0;d<e.length;d+=1){s=e.charAt(d);if(!Object.prototype.hasOwnProperty.call(r,s)){r[s]=f++;i[s]=true}o=u+s;if(Object.prototype.hasOwnProperty.call(r,o)){u=o}else{if(Object.prototype.hasOwnProperty.call(i,u)){if(u.charCodeAt(0)<256){for(t=0;t<l;t++){h=h<<1;if(p==15){p=0;c+=v(h);h=0}else{p++}}n=u.charCodeAt(0);for(t=0;t<8;t++){h=h<<1|n&1;if(p==15){p=0;c+=v(h);h=0}else{p++}n=n>>1}}else{n=1;for(t=0;t<l;t++){h=h<<1|n;if(p==15){p=0;c+=v(h);h=0}else{p++}n=0}n=u.charCodeAt(0);for(t=0;t<16;t++){h=h<<1|n&1;if(p==15){p=0;c+=v(h);h=0}else{p++}n=n>>1}}a--;if(a==0){a=Math.pow(2,l);l++}delete i[u]}else{n=r[u];for(t=0;t<l;t++){h=h<<1|n&1;if(p==15){p=0;c+=v(h);h=0}else{p++}n=n>>1}}a--;if(a==0){a=Math.pow(2,l);l++}r[o]=f++;u=String(s)}}if(u!==""){if(Object.prototype.hasOwnProperty.call(i,u)){if(u.charCodeAt(0)<256){for(t=0;t<l;t++){h=h<<1;if(p==15){p=0;c+=v(h);h=0}else{p++}}n=u.charCodeAt(0);for(t=0;t<8;t++){h=h<<1|n&1;if(p==15){p=0;c+=v(h);h=0}else{p++}n=n>>1}}else{n=1;for(t=0;t<l;t++){h=h<<1|n;if(p==15){p=0;c+=v(h);h=0}else{p++}n=0}n=u.charCodeAt(0);for(t=0;t<16;t++){h=h<<1|n&1;if(p==15){p=0;c+=v(h);h=0}else{p++}n=n>>1}}a--;if(a==0){a=Math.pow(2,l);l++}delete i[u]}else{n=r[u];for(t=0;t<l;t++){h=h<<1|n&1;if(p==15){p=0;c+=v(h);h=0}else{p++}n=n>>1}}a--;if(a==0){a=Math.pow(2,l);l++}}n=2;for(t=0;t<l;t++){h=h<<1|n&1;if(p==15){p=0;c+=v(h);h=0}else{p++}n=n>>1}while(true){h=h<<1;if(p==15){c+=v(h);break}else p++}return c},decompress:function(e){if(e==null)return"";if(e=="")return null;var t=[],n,r=4,i=4,s=3,o="",u="",a,f,l,c,h,p,d,v=LZString._f,m={string:e,val:e.charCodeAt(0),position:32768,index:1};for(a=0;a<3;a+=1){t[a]=a}l=0;h=Math.pow(2,2);p=1;while(p!=h){c=m.val&m.position;m.position>>=1;if(m.position==0){m.position=32768;m.val=m.string.charCodeAt(m.index++)}l|=(c>0?1:0)*p;p<<=1}switch(n=l){case 0:l=0;h=Math.pow(2,8);p=1;while(p!=h){c=m.val&m.position;m.position>>=1;if(m.position==0){m.position=32768;m.val=m.string.charCodeAt(m.index++)}l|=(c>0?1:0)*p;p<<=1}d=v(l);break;case 1:l=0;h=Math.pow(2,16);p=1;while(p!=h){c=m.val&m.position;m.position>>=1;if(m.position==0){m.position=32768;m.val=m.string.charCodeAt(m.index++)}l|=(c>0?1:0)*p;p<<=1}d=v(l);break;case 2:return""}t[3]=d;f=u=d;while(true){if(m.index>m.string.length){return""}l=0;h=Math.pow(2,s);p=1;while(p!=h){c=m.val&m.position;m.position>>=1;if(m.position==0){m.position=32768;m.val=m.string.charCodeAt(m.index++)}l|=(c>0?1:0)*p;p<<=1}switch(d=l){case 0:l=0;h=Math.pow(2,8);p=1;while(p!=h){c=m.val&m.position;m.position>>=1;if(m.position==0){m.position=32768;m.val=m.string.charCodeAt(m.index++)}l|=(c>0?1:0)*p;p<<=1}t[i++]=v(l);d=i-1;r--;break;case 1:l=0;h=Math.pow(2,16);p=1;while(p!=h){c=m.val&m.position;m.position>>=1;if(m.position==0){m.position=32768;m.val=m.string.charCodeAt(m.index++)}l|=(c>0?1:0)*p;p<<=1}t[i++]=v(l);d=i-1;r--;break;case 2:return u}if(r==0){r=Math.pow(2,s);s++}if(t[d]){o=t[d]}else{if(d===i){o=f+f.charAt(0)}else{return null}}u+=o;t[i++]=f+o.charAt(0);r--;f=o;if(r==0){r=Math.pow(2,s);s++}}}};if(typeof module!=="undefined"&&module!=null){module.exports=LZString}
    </script>
</head>
<body>
<div class='container'>
    <div class='row'>
        <div class='span8 col-md-8 columns eight large-8'>
            <h2>Editor</h2>
            <p>Below is the editor generated from the JSON Schema.</p>

            <div id='editor'></div>
        </div>
        <div class='span4 col-md-4 columns four large-4'>
<!--            <div>
                <a href='#' id='direct_link'>Direct Link</a> (preserves schema, value, and options)
            </div>-->

            <h2>JSON Output</h2>
            <p>You can also make changes to the JSON here and set the value in the editor by clicking 
                <button class='btn btn-primary' id='setvalue'>Update Form</button>
            </p>
            
            <textarea id='output' style='width: 100%; height: 300px; font-family: monospace;' class='form-control'></textarea>

            <!--<h2>Options</h2>-->
            <div id='options_holder' style="display:none;">
                <div>
                    <label>CSS Framework</label>
                    <select id='theme_switcher' class='form-control'>
                        <option value='barebones'>Barebones</option>
                        <option value='html'>HTML</option>
                        <option value='jqueryui'>jQuery UI</option>
                        <option value='bootstrap2'>Bootstrap 2</option>
                        <option value='bootstrap3'>Bootstrap 3</option>
                        <option value='foundation3'>Foundation 3</option>
                        <option value='foundation4'>Foundation 4</option>
                        <option value='foundation5'>Foundation 5</option>
                        <option value='foundation6'>Foundation 6</option>
                    </select>
                </div>
                <div>
                    <label>Icon Library</label>
                    <select id='icon_switcher' class='form-control'>
                        <option value=''>None</option>
                        <option value='jqueryui'>jQuery UI</option>
                        <option value='bootstrap2'>Bootstrap 2 Glyphicons</option>
                        <option value='bootstrap3'>Bootstrap 3 Glyphicons</option>
                        <option value='foundation2'>Foundicons 2</option>
                        <option value='foundation3'>Foundicons 3</option>
                        <option value='fontawesome3'>FontAwesome 3</option>
                        <option value='fontawesome4'>FontAwesome 4</option>
                    </select>
                </div>
                <div>
                    <label>Object Layout</label>
                    <select id='object_layout' class='form-control'>
                        <option value='normal'>normal</option>
                        <option value='grid'>grid</option>
                    </select>
                </div>
                <div>
                    <label>Show Errors</label>
                    <select id='show_errors' class='form-control'>
                        <option value='interaction'>On Interaction</option>
                        <option value='change'>On Field Change</option>
                        <option value='always'>Always</option>
                        <option value='never'>Never</option>
                    </select>
                </div>
                <div>
                    <label>Boolean options</label>
                    <select multiple size=9 id='boolean_options' style='width: 100%;' class='form-control'>
                        <option value='required_by_default'>Object properties required by default</option>
                        <option value='display_required_only'>Only show required properties by default</option>
                        <option value='no_additional_properties'>No additional object properties</option>
                        <option value='ajax'>Allow loading schemas via Ajax</option>
                        <option value='disable_edit_json'>Disable "Edit JSON" buttons</option>
                        <option value='disable_collapse'>Disable collapse buttons</option>
                        <option value='disable_properties'>Disable properties buttons</option>
                        <option value='disable_array_add'>Disable array add buttons</option>
                        <option value='disable_array_reorder'>Disable array move buttons</option>
                        <option value='disable_array_delete'>Disable array delete buttons</option>
                        <option value='disable_array_delete_all_rows'>Disable array delete all rows buttons</option>
                        <option value='disable_array_delete_last_row'>Disable array delete last row buttons</option>
                    </select>
                </div>
            </div>

<!--            <h2>Validation</h2>
            <p>This will update whenever the form changes to show validation errors if there are any.</p>
            <textarea id='validate' style='width: 100%; height: 100px; font-family: monospace;' readonly disabled class='form-control'></textarea>-->
        </div>
        <div class='row' style="display:none;">
            <div class='span12 col-md-12 columns twelve large-12'>
                <h2>Schema</h2>
                <p>You can change the schema and see how the generated form looks.  After you make changes, click <button class='btn btn-primary' id='setschema'>Update Schema</button></p>

                <textarea id='schema' style='width: 100%; height: 450px; font-family: monospace;' class='form-control'></textarea>
            </div>
        </div>
        <div class='row' style="display:none;">
            <div class='span12 col-md-12 columns twelve large-12'>
                <h2>Code</h2>
      <pre><code>// Set default options
JSONEditor.defaults.options.theme = 'bootstrap2';

// Initialize the editor
var editor = new JSONEditor(document.getElementById("editor_holder"),{
  schema: {
      type: "object",
      properties: {
          name: { "type": "string" }
      }
  }
});

// Set the value
editor.setValue({
    name: "John Smith"
});

// Get the value
var data = editor.getValue();
console.log(data.name); // "John Smith"

// Validate
var errors = editor.validate();
if(errors.length) {
  // Not valid
}

// Listen for changes
editor.on("change",  function() {
  // Do something...
});</code></pre>
            </div>
        </div>
    </div>
</div>
<script>
function loadJSON(callback) {

    var xobj = new XMLHttpRequest();
    xobj.overrideMimeType("application/json");
    xobj.open('GET', 'http://lordier.fr/raw-project/d3-object/animated-hierarchical-bars/<?= $_GET['path']?>', true);
    xobj.onreadystatechange = function() {
        if (xobj.readyState == 4 && xobj.status == "200") {

            // .open will NOT return a value but simply returns undefined in async mode so use a callback
            callback(xobj.responseText);

        }
    }
    xobj.send(null);

}
loadJSON(function(response) {
    // Do Something with the response e.g.
    //jsonresponse = JSON.parse(response);

    // Assuming json data is wrapped in square brackets as Drew suggests
    //console.log(jsonresponse[0].name);
    
    (function() {
    var schema;
    
    schema =  JSON.parse(response);
    //alert(schema);
    //schema = response;
    //alert(schema);
    if(window.location.href.match('[?&]schema=([^&]+)')) {
        try {
            schema = JSON.parse(LZString.decompressFromBase64(window.location.href.match('[?&]schema=([^&]+)')[1]));
        }
        catch(e) {
            console.log('invalid starting schema');
        }
    }

    // Default starting schema
    if(!schema) {
        schema = {
            title: "Person",
            type: "object",
            properties: {
                name: {
                    type: "string",
                    description: "First and Last name",
                    minLength: 4,
                    default: "Jeremy Dorn"
                },
                age: {
                    type: "integer",
                    default: 25,
                    minimum: 18,
                    maximum: 99
                },
                favorite_color: {
                    type: "string",
                    format: "color",
                    title: "favorite color",
                    default: "#ffa500"
                },
                gender: {
                    type: "string",
                    enum: ["male", "female"]
                },
                location: {
                    type: "object",
                    title: "Location",
                    properties: {
                        city: {
                            type: "string",
                            default: "San Francisco"
                        },
                        state: {
                            type: "string",
                            default: "CA"
                        },
                        citystate: {
                            type: "string",
                            description: "This is generated automatically from the previous two fields",
                            template: "{{city}}, {{state}}",
                            watch: {
                                city: 'location.city',
                                state: 'location.state'
                            }
                        }
                    }
                },
                pets: {
                    type: "array",
                    format: "table",
                    title: "Pets",
                    uniqueItems: true,
                    items: {
                        type: "object",
                        title: "Pet",
                        properties: {
                            type: {
                                type: "string",
                                enum: ["cat","dog","bird","reptile","other"],
                                default: "dog"
                            },
                            name: {
                                type: "string"
                            }
                        }
                    },
                    default: [
                        {
                            type: "dog",
                            name: "Walter"
                        }
                    ]
                }
            }
        }
    }
    //alert(schema);
    // Divs/textareas on the page
    var $schema = document.getElementById('schema');
    var $output = document.getElementById('output');
    var $editor = document.getElementById('editor');
    var $validate = document.getElementById('validate');

    // Buttons
    var $set_schema_button = document.getElementById('setschema');
    var $set_value_button = document.getElementById('setvalue');

    var jsoneditor;

    var updateDirectLink = function() {
        var url = window.location.href.replace(/\?.*/,'');
        
        url += '?schema='+LZString.compressToBase64(JSON.stringify(schema));
        url += '&value='+LZString.compressToBase64(JSON.stringify(jsoneditor.getValue()));
        for(var i in JSONEditor.defaults.options) {
            if(!JSONEditor.defaults.options.hasOwnProperty(i)) continue;
            if(JSONEditor.defaults.options[i]===false) continue;
            else if(JSONEditor.defaults.options[i]===true) {
                url += '&'+i;
            }
            else {
                url += '&'+i+'='+JSONEditor.defaults.options[i];
            }
        }

        document.getElementById('direct_link').href = url;
    };

    var reload = function(keep_value) {
        var startval = (jsoneditor && keep_value)? jsoneditor.getValue() : window.startval;
        window.startval = undefined;

        if(jsoneditor) jsoneditor.destroy();
        jsoneditor = new JSONEditor($editor,{
            schema: schema,
            startval: startval
        });
        //alert(jsoneditor);
        //window.jsoneditor = jsoneditor;

        // When the value of the editor changes, update the JSON output and validation message
        jsoneditor.on('change',function() {
            var json = jsoneditor.getValue();
            //alert(json);
            $output.value = JSON.stringify(schema,null,2);

            var validation_errors = jsoneditor.validate();
            // Show validation errors if there are any
            if(validation_errors.length) {
                $validate.value = JSON.stringify(validation_errors,null,2);
            }
            else {
                $validate.value = 'valid';
            }

            updateDirectLink();
        });
    };

    // Start the schema and output textareas with initial values
    $schema.value = JSON.stringify(schema,null,2);
    $output.value = '';
    
    // When the 'update form' button is clicked, set the editor's value
    $set_value_button.addEventListener('click',function() {
        jsoneditor.setValue(JSON.parse($output.value));
    });

    // Update the schema when the button is clicked
    $set_schema_button.addEventListener('click',function() {
        try {
            schema = JSON.parse($schema.value);
            
        }
        catch(e) {
            alert('Invalid Schema: '+e.message);
            return;
        }
        
        reload();
    });

    // Set the theme by loading the right stylesheets
    var setTheme = function(theme,no_reload) {
        theme = theme || '';

        var mapping = {
            barebones: '',
            html: '',
            bootstrap2: '//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css',
            bootstrap3: '//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css',
            foundation3: '//cdnjs.cloudflare.com/ajax/libs/foundation/3.2.5/stylesheets/foundation.css',
            foundation4: '//cdn.jsdelivr.net/foundation/4.3.2/css/foundation.min.css',
            foundation5: '//cdn.jsdelivr.net/foundation/5.0.2/css/foundation.min.css',
            foundation6: '//cdn.jsdelivr.net/foundation/6.2.1/foundation.min.css',
            jqueryui: '//code.jquery.com/ui/1.10.3/themes/south-street/jquery-ui.css'
        };

        if(typeof mapping[theme] === 'undefined') {
            theme = 'bootstrap3';
            document.getElementById('theme_switcher').value = theme;
        }

        JSONEditor.defaults.options.theme = theme;

        document.getElementById('theme_stylesheet').href = mapping[theme];
        document.getElementById('theme_switcher').value = JSONEditor.defaults.options.theme;

        if(!no_reload) reload(true);
    };

    // Set the icontheme
    // Set the theme by loading the right stylesheets
    var setIconlib = function(iconlib,no_reload) {
        iconlib = iconlib || '';
        var mapping = {
            foundation2: '//cdnjs.cloudflare.com/ajax/libs/foundicons/2.0/stylesheets/general_foundicons.css',
            foundation3: '//cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css',
            fontawesome3: '//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.css',
            fontawesome4: '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css'
        };

        JSONEditor.defaults.options.iconlib = iconlib;

        document.getElementById('icon_stylesheet').href = mapping[iconlib] || '';
        document.getElementById('icon_switcher').value = JSONEditor.defaults.options.iconlib;

        if(!no_reload) reload(true);
    };

    var refreshBooleanOptions = function(no_reload) {
        var boolean_options = document.getElementById('boolean_options').children;
        for(var i=0; i<boolean_options.length; i++) {
            JSONEditor.defaults.options[boolean_options[i].value] = boolean_options[i].selected;
        }
        if(!no_reload) reload(true);
    };

    // Change listeners for options
    document.getElementById('theme_switcher').addEventListener('change',function() {
        setTheme(this.value);
    });
    document.getElementById('icon_switcher').addEventListener('change',function() {
        setIconlib(this.value);
    });
    document.getElementById('object_layout').addEventListener('change',function() {
       JSONEditor.defaults.options.object_layout = this.value;
        reload(true);
    });
    document.getElementById('show_errors').addEventListener('change',function() {
       JSONEditor.defaults.options.show_errors = this.value;
        reload(true);
    });
    document.getElementById('boolean_options').addEventListener('change',function() {
        refreshBooleanOptions();
    });

    // Get starting value from url
    if(window.location.href.match('[?&]value=([^&]+)')) {
      window.startval = JSON.parse(LZString.decompressFromBase64(window.location.href.match('[?&]value=([^&]+)')[1]));
    }

    // Set options from direct link
    setTheme((window.location.href.match(/[?&]theme=([^&]+)/)||[])[1] || 'bootstrap2', true);

    setIconlib((window.location.href.match(/[?&]iconlib=([^&]*)/)||[null,'fontawesome4'])[1], true);

    document.getElementById('object_layout').value = (window.location.href.match(/[?&]object_layout=([^&]+)/)||[])[1] || 'normal';
    JSONEditor.defaults.options.object_layout = document.getElementById('object_layout').value;

    document.getElementById('show_errors').value = (window.location.href.match(/[?&]show_errors=([^&]+)/)||[])[1] || 'interaction';
    JSONEditor.defaults.options.show_errors = document.getElementById('show_errors').value;

    var boolean_options = document.getElementById('boolean_options').children;
    for(var i=0; i<boolean_options.length; i++) {
        if(window.location.href.match(new RegExp('[?&]'+boolean_options[i].getAttribute('value')+'([&=]|$)'))) {
            boolean_options[i].selected = true;
        }
    }
    refreshBooleanOptions(true);

    reload();
})();

});

</script>
<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
<script>
$( document ).ready(function() {
    $('body').on('cilck','.json-editor-btn-save1',function(){
       alert('ok'); 
    });
});
</script>
</body>
</html>
