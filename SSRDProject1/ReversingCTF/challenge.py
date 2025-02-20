def encode_flag():
    flag = "flag{reverse_me}"
    encoded = "".join([chr(ord(c) + 2) for c in flag])  # Shift each character by +2
    print("Encoded Message:", encoded)  # Give encoded text as output

encode_flag()
