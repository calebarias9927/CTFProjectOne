# Encoded message
encoded = "hnci}tgxgtugaog"

# Decoding by shifting each character back by -2
decoded = "".join([chr(ord(c) - 2) for c in encoded])

# Print the decoded flag
print("Decoded Flag:", decoded)