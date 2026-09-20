import json

with open(r"C:\Users\Ajay Singh\.gemini\antigravity\brain\571f0531-caf9-4506-b074-7dc5cea2307e\.system_generated\logs\transcript_full.jsonl", "r", encoding="utf-8") as f:
    lines = f.readlines()

diff_text = None

for line in reversed(lines):
    data = json.loads(line)
    if data.get("type") == "TOOL_RESPONSE" and data.get("tool_calls"):
        pass # Not applicable here
    # Tool responses in transcript are usually represented somehow. Let's just search the raw text for the diff string.
