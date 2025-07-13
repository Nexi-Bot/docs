<?php
$pageTitle = "Troubleshooting Guide - Nexi Bot Documentation";
$pageDescription = "Complete troubleshooting guide for common Nexi Bot issues with step-by-step solutions.";
include 'includes/header.php';
?>

<div class="content-section">
    <div class="container">
        <div class="content-grid">
            <div class="sidebar">
                <h3>Troubleshooting</h3>
                <ul>
                    <li><a href="#common-issues" class="active">Common Issues</a></li>
                    <li><a href="#performance">Performance Issues</a></li>
                    <li><a href="#integrations">Integration Issues</a></li>
                </ul>
            </div>
            
            <div class="content-main">
                <h1>🔧 Troubleshooting Guide</h1>
                <p>Complete troubleshooting guide for common Nexi Bot issues with step-by-step solutions.</p>

                <div class="alert alert-info">
                    <strong>Before You Start:</strong> Most issues can be resolved by checking bot permissions and waiting a few minutes for Discord to sync changes. If problems persist, contact our support team.
                </div>

                <h2 id="common-issues">Common Issues and Solutions</h2>

                <div class="troubleshoot-section">
                    <h3>Bot Not Responding</h3>
                    <p><strong>Symptoms:</strong> Commands don't work, bot appears offline</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Check if bot has proper permissions (Administrator recommended)</li>
                            <li>Verify bot is online in server member list</li>
                            <li>Try using commands in different channels</li>
                            <li>Check if specific features are enabled in <code>/config</code></li>
                            <li>Wait 5-10 minutes for Discord to sync new permissions</li>
                        </ol>
                    </div>
                </div>

                <div class="troubleshoot-section">
                    <h3>Slash Commands Not Appearing</h3>
                    <p><strong>Symptoms:</strong> <code>/</code> commands don't show up in Discord</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Wait 10-15 minutes for Discord to register commands</li>
                            <li>Try leaving and re-inviting the bot with proper permissions</li>
                            <li>Check if bot has "Use Slash Commands" permission</li>
                            <li>Restart Discord application completely</li>
                            <li>Clear Discord cache (Ctrl+Shift+R)</li>
                        </ol>
                    </div>
                </div>

                <div class="troubleshoot-section">
                    <h3>Premium Features Not Working</h3>
                    <p><strong>Symptoms:</strong> Premium features show as locked despite having premium</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Use <code>/config</code> to verify premium status is recognized</li>
                            <li>Wait 15 minutes after purchase for activation</li>
                            <li>Check if premium is applied to correct server</li>
                            <li>Contact support with purchase receipt if status incorrect</li>
                        </ol>
                    </div>
                </div>

                <div class="troubleshoot-section">
                    <h3>Music Not Playing</h3>
                    <p><strong>Symptoms:</strong> Music commands work but no audio</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Ensure bot has "Connect" and "Speak" permissions in voice channels</li>
                            <li>Check if voice channel has user limit preventing bot join</li>
                            <li>Try joining a different voice channel</li>
                            <li>Verify music source (YouTube/Spotify) is accessible in your region</li>
                            <li>Restart music with <code>/music stop</code> then <code>/music play</code></li>
                        </ol>
                    </div>
                </div>

                <div class="troubleshoot-section">
                    <h3>Configuration Not Saving</h3>
                    <p><strong>Symptoms:</strong> Settings reset after configuration</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Check bot has "Administrator" or "Manage Server" permissions</li>
                            <li>Wait 30 seconds between configuration changes</li>
                            <li>Verify database connection by trying other commands</li>
                            <li>Use <code>/config</code> to reconfigure if settings lost</li>
                        </ol>
                    </div>
                </div>

                <div class="troubleshoot-section">
                    <h3>Moderation Commands Failing</h3>
                    <p><strong>Symptoms:</strong> Kick/ban/mute commands don't work</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Ensure bot role is above target user's highest role</li>
                            <li>Verify bot has required moderation permissions</li>
                            <li>Check that bot role hierarchy is properly configured</li>
                            <li>Make sure you're not trying to moderate server owner</li>
                            <li>Verify target user is actually in the server</li>
                        </ol>
                    </div>
                </div>

                <h2 id="performance">Performance Issues</h2>

                <div class="troubleshoot-section">
                    <h3>Slow Command Response</h3>
                    <p><strong>Causes:</strong> High server load, Discord API rate limits</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Avoid rapid-fire command usage</li>
                            <li>Use commands during off-peak hours when possible</li>
                            <li>Check Discord status page for platform issues</li>
                            <li>Premium users get priority processing</li>
                            <li>Contact support if consistently slow across all commands</li>
                        </ol>
                    </div>
                </div>

                <div class="troubleshoot-section">
                    <h3>Memory or Resource Errors</h3>
                    <p><strong>Symptoms:</strong> Bot lagging, timeouts, or restart errors</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Clear large music queues with <code>/music clear</code></li>
                            <li>Reduce number of active logging channels temporarily</li>
                            <li>Disable unused features in <code>/config</code> to reduce load</li>
                            <li>Premium servers get additional resource allocation</li>
                            <li>Report persistent issues to support team</li>
                        </ol>
                    </div>
                </div>

                <h2 id="integrations">Integration Issues</h2>

                <div class="troubleshoot-section">
                    <h3>API Key Problems</h3>
                    <p><strong>Symptoms:</strong> External integrations (Google, Roblox, etc.) not working</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Verify API key format matches provider requirements</li>
                            <li>Check API quota limits haven't been exceeded</li>
                            <li>Ensure API keys have correct permissions on provider side</li>
                            <li>Test API keys directly with provider's tools</li>
                            <li>Regenerate API keys if expired or compromised</li>
                        </ol>
                    </div>
                </div>

                <div class="troubleshoot-section">
                    <h3>Webhook Failures</h3>
                    <p><strong>Symptoms:</strong> External notifications not arriving in Discord</p>
                    <div class="solution-steps">
                        <h4>Solutions:</h4>
                        <ol>
                            <li>Test webhook URL manually with external tools</li>
                            <li>Check webhook permissions and channel access</li>
                            <li>Verify Discord channel permissions allow webhook posting</li>
                            <li>Update webhook configuration if Discord channels changed</li>
                            <li>Check external service status pages</li>
                        </ol>
                    </div>
                </div>

                <div class="alert alert-warning">
                    <strong>Still Need Help?</strong> If these solutions don't resolve your issue, please <a href="/support">contact our support team</a> with detailed information about your problem, including any error codes you received.
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
