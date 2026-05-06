# Parity Sec Token Lens Walkthrough

I use this file as a small checklist before changing the PHP implementation.

| Case | Focus | Score | Lane |
| --- | --- | ---: | --- |
| baseline | trust boundary | 216 | ship |
| stress | claim drift | 168 | ship |
| edge | replay exposure | 162 | ship |
| recovery | policy width | 221 | ship |
| stale | trust boundary | 220 | ship |

Start with `recovery` and `edge`. They create the widest contrast in this repository's fixture set, which makes them better review anchors than the middle cases.

The next useful expansion would be a malformed fixture around claim drift and policy width.
