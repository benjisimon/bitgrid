/*
 * This is a javascript file used for working with various bits of math
 */

var Calc = {
  
  mapToDec: function(buffer) {
    var val = 0;
    for(var i = 0; i < buffer.length; i++) {
      val += buffer[i] ? Math.pow(2, i) : 0;
    }
    return val;
  },

  decToMap: function(dec) {
    var buffer = [];
    while(dec > 1) {
      buffer.push(dec % 2 == 0 ? false : true);
      dec = Math.floor(dec / 2);
    }
    buffer.push(dec == 0 ? false : true);
    while(buffer.length < 5) {
      buffer.push(false);
    }
    return buffer;
  },


  charToDec: function(char) {
    var chars = "0123456789ABCDEFGHIJKLKMOPQRSTV";
    for(var i = 0; i < chars.length; i++) {
      if(char == chars.substring(i, i+1)) {
        return i;
      }
    }
    return NaN;
  },


  decToChar: function(dec) {
    var chars = "0123456789ABCDEFGHIJKLKMOPQRSTV";
    return chars.substring(dec, dec+1);
  },

  mapToMagic: function(map) {
    var magic = '';
    for(var i = 0; i < map.length; i += 5) {
      var section = map.slice(i, i+5);
      magic += Calc.decToChar(Calc.mapToDec(section));
    }
    return magic;
  },

  magicToMap: function(magic) {
    var map = [];
    for(var i = 0; i < magic.length; i++) {
      var dec = Calc.charToDec(magic.substring(i, i+1));
      var section = Calc.decToMap(dec);
      for(var j = 0; j < 5; j++){
        map.push(section[j]);
      }
    }
    return map;
  }
};
