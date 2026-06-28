#!/usr/bin/env node
// Acorn-based JS parser for pak-it
// Outputs ESTree AST as JSON for PHP consumption

const acorn = require('acorn');
const fs = require('fs');

function simplify(ast) {
    if (!ast || typeof ast !== 'object') return ast;
    if (Array.isArray(ast)) return ast.map(simplify);

    const result = { type: ast.type };
    const skip = ['type', 'loc', 'errors'];
    
    for (const key of Object.keys(ast)) {
        if (skip.includes(key)) continue;
        const val = ast[key];
        if (val === null || val === undefined) continue;
        if (key === 'start' || key === 'end') continue;
        
        if (key === 'range') {
            result.start = val[0];
            result.end = val[1];
        } else if (typeof val === 'object') {
            result[key] = Array.isArray(val) ? val.map(simplify) : simplify(val);
        } else {
            result[key] = val;
        }
    }
    return result;
}

// Read file or stdin
let input;
if (process.argv[2]) {
    input = fs.readFileSync(process.argv[2], 'utf8');
} else {
    input = fs.readFileSync('/dev/stdin', 'utf8');
}

const ast = acorn.parse(input, {
    ecmaVersion: 'latest',
    sourceType: 'module',
    locations: false,
    ranges: true,
});

const simplified = simplify(ast);
simplified._source = input;
console.log(JSON.stringify(simplified));
