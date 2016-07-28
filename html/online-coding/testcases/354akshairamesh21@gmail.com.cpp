
#include<stdio.h>
		int a[100][100];
		int b[100][100];
		void spiralPrint(int m, int n)
{
    int i, k = 0, l = 0;
 
    /*  k - starting row index
        m - ending row index
        l - starting column index
        n - ending column index
        i - iterator
    */
 
    while (k < m && l < n)
    {
        /* Print the first row from the remaining rows */
        for (i = l; i < n; ++i)
        {
            printf("%d ", b[k][i]);
        }
        k++;
 
        /* Print the last column from the remaining columns */
        for (i = k; i < m; ++i)
        {
            printf("%d ", b[i][n-1]);
        }
        n--;
 
        /* Print the last row from the remaining rows */
        if ( k < m)
        {
            for (i = n-1; i >= l; --i)
            {
                printf("%d ", b[m-1][i]);
            }
            m--;
        }
 
        /* Print the first column from the remaining columns */
        if (l < n)
        {
            for (i = m-1; i >= k; --i)
            {
                printf("%d ", b[i][l]);
            }
            l++;    
        }        
    }
}
int main()
{
	


     

	int R,C,i,j;

    scanf("%d%d",&R,&C);
    for(i=0;i<R;i++)
    { for(j=0;j<C;j++)
      scanf("%d",&a[i][j]);
      }
 for(int i=R-1;i>=0;i--)
 { for(int j=0;j<C;j++)
 {    b[R-1-i][j]=a[i][j];
 }
 }
      spiralPrint(R,C);
















    
	return 0;
}