# parity-sec-token-lens

`parity-sec-token-lens` is a compact PHP repository for security tooling, centered on this goal: Implement a PHP security tooling project for token graph analysis, using node-edge fixtures and cycle and reachability reports.

## Reason For The Project

The project exists to keep a narrow engineering decision visible and testable. For this repo, that decision is how trust boundary and replay exposure should influence a review result.

## Parity Sec Token Lens Review Notes

Start with `policy width` and `replay exposure`. Those cases create the widest score spread in this repo, so they are the best quick check when the model changes.

## What It Does

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/parity-sec-token-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `policy width` and `replay exposure`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## How It Is Put Together

The core code exposes a scoring path and the added review layer uses `signal`, `slack`, `drag`, and `confidence`. The domain terms are `trust boundary`, `claim drift`, `replay exposure`, and `policy width`.

The PHP addition stays small enough to inspect in one sitting.

## Run It

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Check It

The verifier is intentionally local. It should fail if the fixture score math, lane assignment, or language-specific test drifts.

## Boundaries

This remains a local project with deterministic fixtures. It does not depend on credentials, hosted services, or live data. Future work should add richer malformed inputs before widening the public API.
