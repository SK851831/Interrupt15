int main(){
int i,j,m,n,top,bottom,left,right;
printf(“Enter m and n “);
scanf(“%d %d”,&m,&n);
int matrix[m][n]; 
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
printf("\nThe spiral matrix is:\n");
top = 0;
bottom = m-1;
left = 0;
right = n-1;
while(1){
for(i=top;ibottom || left>right) break;
for(j=top;jbottom || left>right) break;
for(i=right;i>=left;–i){
printf(“%d “,matrix[bottom][i]);
}
bottom–;
if(top>bottom || left>right) break;
for(j=bottom;j>=top;–j){
printf(“%d “,matrix[j][left]);
}
left++;
if(top>bottom || left>right) break;
}
return 0;
}