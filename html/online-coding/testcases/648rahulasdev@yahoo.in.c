#include<stdio.h>
int main()
{
 int a[100][100],i,j,n,m,l=0,k=0;
 scanf("%d%d",&n,&m);
 for(i=0;i<n;i++)
 	for(j=0;j<m;j++)
 		scanf("%d",&a[i][j]);
  
 while (k < m && l < n)
    {
        /* Print the first row from the remaining rows */
        for (i = l; i <m; i++)
        {
            printf("%d ", a[m-1][i]);
        }
        k++;
 
        /* Print the last column from the remaining columns */
        for (i = n-2; i >0 ; i--)
        {
            printf("%d ", a[i][m-1]);
        }
        n--;
 
        /* Print the last row from the remaining rows */
        if ( k < m)
        {
            for (i = m-1; i >= l; --i)
            {
                printf("%d ", a[l][i]);
            }
            m--;
        }
 
        /* Print the first column from the remaining columns */
        if (l < n)
        {
            for (i = k; i <m; i++)
            {
                printf("%d ", a[i][l]);
            }
            l++;    
        }        
    }
 if(l!=k)
   printf("%d",a[i/2][j/2]);
}