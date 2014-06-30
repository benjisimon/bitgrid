/*
 * This is a javascript file used for working with our grid
 */

var Grid = {
  map: [],

  restore: function(magic) {
    Grid.refresh(Calc.magicToMap(magic));
    Grid.relink();
  },
  
  refresh: function(buffer) {
    for(var i = 0; i < AppCtx.grid.size; i++) {
      var sel = '.grid .cell-' + i;
      if(buffer && i < buffer.length) {
        Grid.map[i] = buffer[i];
        if(buffer[i]) {
          $(sel).addClass('on');
        } else {
          $(sel).removeClass('on');
        }
      } else {
        Grid.map[i] = false;
        $(sel).removeClass('on');
      }
    }
  },

  recalc: function() {
    location.hash = '#' + Calc.mapToMagic(Grid.map);
    Grid.relink();
  },

  init: function() {
    for(var i = 0; i < AppCtx.grid.size; i++) {
      Grid.map.push(false);
    }  
  },

  relink: function() {
    $('.permalink').val(AppCtx.app.url + location.hash);
  }
  
};

Grid.init();



$(document).ready(function() {
  $('.grid .cell').click(function() {
    $(this).toggleClass('on');
    Grid.map[$(this).attr('index')] = $(this).hasClass('on');
    Grid.recalc();
  });

  if(location.hash) {
    Grid.restore(location.hash.substring(1));
  }

  var lastHash = null;
  setInterval(function() {
    if(location.hash != lastHash) {
      lastHash = location.hash;
      Grid.restore(location.hash.substring(1));
    }
  }, 250);

});
