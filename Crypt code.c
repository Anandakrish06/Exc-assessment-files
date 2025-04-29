//Implement both classical and modern encryption algorithms to understand their working principles and applications in real-world cybersecurity. 
 
Implement Encryption Algorithms 
#include <stdio.h> #include <ctype.h> void caesarEncrypt(char *text, int shift) {     for (int i = 0; text[i] != '\0'; i++) {         if (isalpha(text[i])) {             char offset = isupper(text[i]) ? 'A' : 'a';             text[i] = (text[i] - offset + shift) % 26 + offset; 
        } 
    } 
} 
 
void caesarDecrypt(char *text, int shift) {     caesarEncrypt(text, 26 - (shift % 26)); 
} 
int main() {     char message[] = "Hello World"; 
    int shift = 3;     caesarEncrypt(message, shift);     printf("Encrypted: %s\n", message);     caesarDecrypt(message, shift);     printf("Decrypted: %s\n", message);     return 0; 
} 
