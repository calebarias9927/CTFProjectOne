# Vigenère Cipher

## Details

- difficulty: Easy
- category: Cryptography
- flags: flag{SSRD@forintern}

## Description

Get ready for a thrilling challenge! Your mission: decode a mysterious message,
`hefi{lxtw@kqknpmjtg}`, to uncover a top-secret passphrase for a special
project. The trick? You've got a special key to help you crack the code.
Can you figure out how to use it with the Vigenère Cipher? Think of it like
solving a puzzle where letters hold the key to unlocking hidden meanings!

## Deployment

The players should not get any additional files.

## Solution

To decrypt the Vigenère Cipher, we will require a key. As the hint suggests
the key is the game, and the game being CTF challenge, we will use CTF as a key.
The Vigenère Cipher works by replacing each letter in the plaintext with its
corresponding letter in the key. We can use any online decoder on
Vigenère Cipher for this challenge. The flag is gained after the key and
encrypted text decoded into: `flag{SSRD@forintern}`.
