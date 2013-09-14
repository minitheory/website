$.tablesorter.addParser({
  // use a unique id
  id: 'relativeTime',
  is: function(s, table, cell) {
    return false;
  },
  format: function(s, table, cell, cellIndex) {
    var split = s.split(/[ ,]+/);
    var totalMin;
    var day=0;
    var hour=0;
    var min=0;
    
    for( var i=0; i<split.length;i++){
      var inner = split[i];
      
      
      if (inner.indexOf('d') > 0){
        day = inner.slice(0,inner.indexOf('d'));
        day = day * 24 * 60;
      }

      else if (inner.indexOf('h') > 0){
        hour = inner.slice(0,inner.indexOf('h'));
        hour = hour * 60;
      }

      else if (inner.indexOf('m') > 0){
        min = inner.slice(0,inner.indexOf('m'));
        min = min * 1;
      }
    }
      totalMin = day + hour + min;
    return totalMin;
  },
  // set the type to either numeric or text (text uses a natural sort function
  // so it will work for everything, but numeric is faster for numbers
  type: 'numeric'
});