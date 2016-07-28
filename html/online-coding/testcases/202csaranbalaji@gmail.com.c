#include<bits/stdc++.h>
using namespace std;
 
int main()
{
     
    int arr[]={1,5,7,10};
     
    int N;
    cin>>N;
    while(N--)
        {
             
            long long L;
            cin>>L;
             
            long long ans=0,x;
            ans=L/10;
            if(ans)
                L=L%10;
             
            x=L/7;
            if(x)
                {
                    L=L%7;
                    ans+=x;
                }
                 
            x=L/5;
            if(x)
                {
                    L=L%5;
                    ans+=x;
                }
                 
            x=L;
            if(x)
                {
                     
                     
                    ans+=x;
                }
            cout<<ans<<endl;        
            }
}