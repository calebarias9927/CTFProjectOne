## Simple Reversing Challenge (CTF)

###  Challenge Description
Welcome to the Simple Reversing Challenge! Your task is to decode the hidden message. The message has been encoded using a basic character shifting technique.

###  Objective
Find the original message by reversing the encoding process. The decoded message will contain the **flag**.

### Files Provided
- **challenge.py** → Contains the encoded message and the encoding logic.
- **solver.py** → (Optional) A script to help you decode the message.
- **README.txt** → This file containing challenge instructions.

### 🏁 Challenge Instructions
1. Open `challenge.py` to see how the message was encoded.
2. Reverse the encoding process to recover the original message.
3. The flag format is: `flag{your_decoded_message}`
4. Once you find the correct flag, you have solved the challenge!

### 💡 Hints
- The encoding method uses a simple shift cipher (Caesar cipher with a shift of `-2`).
- If stuck, use `solver.py` to automate decoding.
- You can manually decode by shifting each letter back in the alphabet.

### Running the Solver Script
If you want to use the solver, run:
```powershell
python solver.py
```
This will output the decoded message (flag).

### 🔐 Example
#### Encoded Message:
```
hnci}tgxgtugaog
```
#### Decoded Message:
```
fla{simple_ctf}
```
#### Flag:
```
flag{simple_ctf}
```

Good luck and have fun! 🚀














Encoded Message: hnci}tgxgtugaog