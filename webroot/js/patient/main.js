var capitalize = function(word){
  return  word.charAt(0).toUpperCase() + word.slice(1);
}

var form = function(model, field, options){

  if(options === undefined){

    options = {
      type: 'text'
    };
  }

  var id = model + capitalize(field);

  return '<label for="' + id + '">' + capitalize(field) + ': <label><input type="'+options.type+'" name="data[' + model + '][' +field+ ']" id="'+ id +'"  />';

};

$(function(){

  $('legend.js-add').on('click', (function(evt){
    console.error('click');

    var legend = $(this).text();
    var model = $(this).text().replace(' ', '');
    var container = $(this).parent();
    
    switch(legend){
      case 'Clinical History':

      container.empty();
      container.append('<legend>' +legend+ '</legend>');


      break;
    }




  }));

});