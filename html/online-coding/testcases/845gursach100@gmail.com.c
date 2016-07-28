#include<stdio.h>
int main()
{
   int row = 0, b =row-1, col= 0,r = col-1,size = 0,matrix[10][10],i;
    int dir;

printf("\n Size of Matrix: "); 
scanf("%d", &size); 

printf("\n  Enter Matrix Elements: \n"); 
for(row=0;row<size;row++)   
{
    for(col=0;col<size;col++) 
    {
        printf("    Element [%d][%d] :", row,col);
        scanf("%d" , &matrix[row][col]); 
    }
    printf("\n");
}

printf("\n the given Matrix is :\n");

    for(row=0;row<size;row++)
    {
        for(col=0;col<size;col++)
        {
            printf("%4d",matrix[row][col]); 
        printf("\n");
    }

    printf("output of helical traverse matrix is: \n");

    while(col<=r && row<=b) 
    {
        if(dir==0){
            for(i=col;i<=r;i++){

                printf("%4d",matrix[row][i]); 
            }
                row++;  
        }

        else if(dir==1){
            for(i=row;i<=b;i++)
            {      

                printf("%4d",matrix[i][col-1]); 
            }

                r--; 
        }
        else if(dir==2)
        {
            for(i=r;i>=col;i--)
            { 

                printf("%4d",matrix[b][i]);
            }

                b--; 
        }
        else if(dir==3)
        {
            for(i=b;i>=row;i--)
            { 

                printf("%4d",matrix[i][col]);
            }
                col++; 
        }
        dir=(dir+1)%4;
    }
    
   return 0;
}