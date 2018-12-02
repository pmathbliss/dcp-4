let ints = [];

//clean up inputs
process.argv.forEach(function (val, index, array) {

    val = parseInt(val);

    if(index < 2 )
    {
        return;
    }
    ints.push(val);
  });


/**
 * First the first missing positive integer
 * @param {Array} arrayValue 
 */
  var find = function (arrayValue){
    
    ints.sort();
    let missingInt = 1;

    ints.forEach(function(val, index, array) {
        if(val < 1)
        {
            return;
        }
        if(val > missingInt)
        {
            return;
        }
        missingInt = val + 1;
    });
    return missingInt;
  }

  let missingInt = find( ints );

  console.log("Missing int", missingInt);