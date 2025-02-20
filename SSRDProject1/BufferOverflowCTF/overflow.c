#include <stdio.h>
#include <string.h>

void win() {
    printf("🎉 Congratulations! Here is your flag: flag{buffer_overflow_works}\n");
}

void vuln() {
    char buf[32];  // Small buffer (32 bytes)
    printf("Enter your input: ");
    gets(buf);  // Vulnerable function
}

int main() {
    vuln();
    return 0;
}
