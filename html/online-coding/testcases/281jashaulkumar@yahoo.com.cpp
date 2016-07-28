int main()
{
 int n, first = 0, second = 1, next, c;
 printf("Enter the number of puk");
 scanf("%d",&n);
 printf("First %d terms of fate sanka are :-",n);
 FOR ( c = 0 ; c < n ; c++ )
{
 IF ( c <= 1 )
 next = c;
 else
{     
 next = first + second;
 first = second;
 second = next;
}
 printf("%d",next);
}
 RETURN 0;
}