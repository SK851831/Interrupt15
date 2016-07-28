#include
#include
#include

int main(){
int i,j,m,n,top,bottom,left,right;
printf(“Enter m and n “);
scanf(“%d %d”,&m,&n);
int matrix[m][n]; // m rows and n columns
printf(“\nEnter the array elements\n”);
for(i=0;i<m;++i){
for(j=0;j<n;++j){
scanf("%d",&matrix[i][j]);
}
}
printf("The array is:\n");
for(i=0;i<m;++i){
for(j=0;j<n;++j){
printf("%d ",matrix[i][j]);
}
printf("\n");
}
// the code snipped to print the spiral matrix
printf("\nThe spiral matrix is:\n");
top = 0;
bottom = m-1;
left = 0;
right = n-1;
while(1){
// Printing the first row
for(i=top;ibottom || left>right) break;
// Printing the last column
for(j=top;jbottom || left>right) break;
// Printing the last row
for(i=right;i>=left;–i){
printf(“%d “,matrix[bottom][i]);
}
bottom–;
if(top>bottom || left>right) break;
// Printing the first column
for(j=bottom;j>=top;–j){
printf(“%d “,matrix[j][left]);
}
left++;
if(top>bottom || left>right) break;
}
return 0;
}
