#include<stdio.h>

void main()
{
 
    int initial_direction = UP , n = MAX , p = 1 ;    /* intial_direction
 
    is set to UP because we need to start moving right */
 
    int r ,c , a[MAX][MAX];
 
    int row_right  = 0 , column_down = n-1 , row_left = n-1 , column_up = 0 ;
 
    clrscr ();
 
    //Set all elements of the matrix to 0
 
    for(r = 0 ; r < MAX ; r++)
    {
        for(c = 0 ; c < MAX ; c++)
            a[r][c] = 0 ;
 
    }
 
 
    //Generate elements of the spiral matrix
 
    while(p != n*n+1)
    {
 
          if(initial_direction == UP)
          {
            //Move RIGHT
 
            r = row_right++ ;
 
            for(c = 0 ; c < n ; c++)
            {
                if(a[r][c] == 0)
                    a[r][c] = p++;
 
            }
 
 
 
 
            initial_direction = RIGHT ;
          }
          else if(initial_direction == RIGHT)
          {
            //Move down
 
            c = column_down-- ;
 
            for(r = 0 ; r < n ; r++)
            {
 
                if(a[r][c] == 0)
                    a[r][c] = p++;
            }
 
 
            initial_direction = DOWN ;
 
 
 
 
          }
          else if(initial_direction == DOWN)
          {
            //Move left
 
            r = row_left-- ;
 
            for(c = n-1 ; c >= 0 ; c--)
            {
                if(a[r][c] == 0)
                    a[r][c] = p++;
 
            }
 
            initial_direction = LEFT ;
 
 
 
 
 
          }
          else if(initial_direction == LEFT)
          {
            //Move up
 
            c = column_up++;
 
            for(r = n-1 ; r >= 0 ; r--)
            {
 
                if(a[r][c] == 0)
                  a[r][c] = p++;
 
            }
 
 
            initial_direction = UP ;
          }
 
    }
 
 
    //Print the matrix
 
    printf("\n\n");
 
    for(r = 0 ; r < MAX ; r++)
    {
          for(c = 0 ; c < MAX ; c++)
          printf("%4d ",a[r][c]);
 
          printf("\n");
 
 
 
    }
 
}
