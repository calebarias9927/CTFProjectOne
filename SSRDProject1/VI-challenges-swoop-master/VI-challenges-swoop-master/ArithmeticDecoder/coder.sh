#!/usr/bin/env bash

input_string="${1}"

string_to_ascii_decimals() {
	local str="$1"
	local ascii_values=()

	for ((i = 0; i < ${#str}; i++)); do
		# Get the character at position $i
		char="${str:$i:1}"

		# Get the ASCII decimal value of the character
		ascii_value=$(printf "%d" "'$char")

		# Append the ASCII value to the list
		ascii_values+=("$ascii_value")
	done
	echo "${ascii_values[*]}"
}

generate_expression() {
	local target=$1
	local result=0
	local expression=""

	for ((i = 0; i < 5; i++)); do
		num=$((RANDOM % 101 - 50))
		if [[ $i -eq 0 ]]; then
			expression="$num"
			result=$num
		else
			if [[ $((RANDOM % 2)) -eq 0 ]]; then
				expression="$expression + $num"
				result=$((result + num))
			else
				expression="$expression - $num"
				result=$((result - num))
			fi
		fi
	done

	adjustment=$((target - result))
	if [[ $adjustment -ne 0 ]]; then
		expression="$expression + $adjustment"
	fi

	echo "$expression"
}

echo "ASCII decimal values for the string: '$input_string'"
ascii_list=$(string_to_ascii_decimals "$input_string")
echo "List of ASCII values: $ascii_list"

targets=($ascii_list)

echo "Generating random arithmetic expressions to match target values:"
for target in "${targets[@]}"; do
	echo "$(generate_expression $target)"
done
