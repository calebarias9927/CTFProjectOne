cmake_minimum_required(VERSION 3.27)
project(BufferOverflowCTF C)

set(CMAKE_C_STANDARD 11)

# Add security-disabling flags for exploitation
set(CMAKE_C_FLAGS "${CMAKE_C_FLAGS} -fno-stack-protector -g")

add_executable(BufferOverflowCTF
        overflow.c)
