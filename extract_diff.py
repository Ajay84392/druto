import json

with open(r"C:\Users\Ajay Singh\.gemini\antigravity\brain\571f0531-caf9-4506-b074-7dc5cea2307e\.system_generated\logs\transcript_full.jsonl", "r", encoding="utf-8") as f:
    lines = f.readlines()

for line in lines:
    try:
        data = json.loads(line)
        if data.get("type") == "TOOL_RESPONSE":
            args = data.get("args", {})
            output = args.get("output", "")
            if "git diff resources/views/welcome.blade.php" in data.get("content", "") or "diff --git a/resources/views/welcome.blade.php b/resources/views/welcome.blade.php" in output:
                with open("extracted_diff.patch", "w", encoding="utf-8") as out:
                    out.write(output)
                print("Found and wrote extracted_diff.patch")
                break
    except Exception as e:
        pass
