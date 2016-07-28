#include<stdio.h>
void main()
{ int T[100],F[100],B[100],FD[100],BD[100],i,s,t,d,n,j;
 s=0;
  scanf("%d",&n);
  for(i=0;i<n;i++)
    scanf("%d%d%d%d%d",&F[i],&B[i],&T[i],&FD[i],&BD[i]);
 for(i=0;i<n;i++)
 { if(F[i]==B[i]&&F[i]<FD[i]&&B[i]<BD[i])
    printf("No Ditch\n");
   else if(F[i]>B[i])
    { j=0;s=0;
    while(1)
    {j=j+F[i];s=s+F[i];
     if(j>=FD[i])
     {d=j%FD[i];s=s-d;;
     break;
     }
     j=j-B[i];s=s+B[i];
    }
     t=s*T[i];
    printf("%d F\n",t);
     }
  else if(F[i]<B[i])
   { j=-1*F[i];s=F[i];
    while(1)
    {
     j=j+B[i];s=s+B[i];
     if(j>=BD[i])
     {d=j%BD[i];s=s-d;
     break;
     }
     j=j-F[i];s=s+F[i];
    }
     t=s*T[i];
    printf("%d B\n",t);
   }
  else if(F[i]==B[i]&&F[i]>FD[i])
  { s=0;
    s+=F[i];
    s-=s%FD[i];
    t=s*T[i];
    printf("%d F\n",t);
  }
  else if(F[i]==B[i]&&B[i]>BD[i])
  { s=0;
    s+=B[i];
    s-=s%BD[i];
    t=s*T[i];
    printf("%d B\n",t);
  }

 }
 }