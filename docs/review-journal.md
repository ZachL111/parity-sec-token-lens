# Review Journal

This journal records the domain cases that matter before widening the public API.

The local checks classify each case as `ship`, `watch`, or `hold`. That gives the project a small review vocabulary that matches its security tooling focus without claiming live deployment or external usage.

## Cases

- `baseline`: `trust boundary`, score 216, lane `ship`
- `stress`: `claim drift`, score 168, lane `ship`
- `edge`: `replay exposure`, score 162, lane `ship`
- `recovery`: `policy width`, score 221, lane `ship`
- `stale`: `trust boundary`, score 220, lane `ship`

## Note

A future change should add new cases before it changes the scoring rule.
