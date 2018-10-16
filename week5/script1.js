
document.getElementById("determinant").addEventListener("click", solveDetermiant);

function solveDetermiant() {
    let mat=[[],[],[]];
    for (var i = 0; i < 3; i++)
        for (var j = 0; j < 3; j++){
           var index = (i+1)+''+(j+1);
           var element = parseInt(document.getElementById("s"+index).value); 
           mat[i][j]=element;
           console.log(mat[i][j]);
        }
    var sum = mat[0][0]*(mat[1][1]*mat[2][2]-mat[1][2]*mat[2][1]) -  mat[0][1]*(mat[1][0]*mat[2][2]-mat[1][2]*mat[2][0]) -  mat[0][2]*(mat[1][0]*mat[2][1]-mat[1][1]*mat[2][0]);
    document.getElementById("result").innerHTML = sum;
   
}