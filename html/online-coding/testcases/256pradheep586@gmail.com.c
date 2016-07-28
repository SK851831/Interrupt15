#include <stdio.h>

 
void spiralPrint(int m, int n, int a[100][100])
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
            printf("%d ", a[k][i]);
        }
        k++;
 
        /* Print the last column from the remaining columns */
        for (i = k; i < m; ++i)
        {
            printf("%d ", a[i][n-1]);
        }
        n--;
 
        /* Print the last row from the remaining rows */
        if ( k < m)
        {
            for (i = n-1; i >= l; --i)
            {
                printf("%d ", a[m-1][i]);
            }
            m--;
        }
 
        /* Print the first column from the remaining columns */
        if (l < n)
        {
            for (i = m-1; i >= k; --i)
            {
                printf("%d ", a[i][l]);
            }
            l++;    
        }        
    }
}
 
/* Driver program to test above functions */
int main()
{
  int a[100][100];
  int y,z,r,c;
  printf("Enter the rows and columns of matrix\n");
  scanf("%d%d",&r,&c);
  printf("Enter the elements of matrix\n");
  for(y=0;y<r;y++)
  {
    for(z=0;z<c;z++)
    {
      scanf("%d",&a[y][z]);
            }
            }
    spiralPrint(r, c, a);
    return 0;
}