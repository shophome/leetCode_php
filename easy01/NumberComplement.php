<?php
/**
 * Created by PhpStorm.
 * User: lb
 * Date: 2017/12/30 0030
 * Time: 21:03
 */

/**
 * https://leetcode.com/problems/number-complement/description/
 * Given a positive integer, output its complement number.
 * The complement strategy is to flip the bits of its binary representation.
 *
 * Note:
 * The given integer is guaranteed to fit within the range of a 32-bit signed integer.
 * You could assume no leading zero bit in the integer’s binary representation.
 *
 * Example 1:
 * Input: 5
 * Output: 2
 * Explanation: The binary representation of 5 is 101 (no leading zero bits), and its complement is 010. So you need to output 2.
 *
 * Example 2:
 * Input: 1
 * Output: 0
 * Explanation: The binary representation of 1 is 1 (no leading zero bits), and its complement is 0. So you need to output 0.
 */


function solution($num)
{
    $i = 1;

    while ($num >= $i) {
        $num ^= $i;
        $i <<= 1;
    }

    return $num;
}

print_r(solution(5));


